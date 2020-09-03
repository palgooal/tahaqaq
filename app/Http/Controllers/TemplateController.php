<?php

namespace App\Http\Controllers;

use App\Model\Template;
use App\Model\TemplateCategory;
use App\Model\TemplateSpecification;
use App\Model\Menu;
use Illuminate\Http\Request;
use App\Logic\SysVar\SysVarLogic;
use App\Logic\SysVar\SysVarTypes;
use Illuminate\Support\Facades\App;
use App\Logic\TahaqqSessionInfo;

class TemplateController extends Controller
{
    private $sysVarLogic;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sysVarLogic = new SysVarLogic();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $templates = Template::paginate(10);
        $categories = TemplateCategory::all();
        return view('admin.templates.index', compact(['templates','categories']));
    }

    public function viewTemplate(){

        $lang = App::getLocale();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
        $isClientLogin  = TahaqqSessionInfo::IsClientLogin();
        return view('template.template')
                ->with('templateAll',Template::orderBy('id','desc')->get())
                ->with('menus',Menu::orderBy('sort','asc')->get())
                ->with('sysVarFooter', $sysVarFooter)
                ->with('sysVarSocialMedia',$sysVarSocialMedia)
                ->with('categoris',TemplateCategory::get())
                ->with('isClientLogin',$isClientLogin);
    }

    public function viewTemplateCatecory(Request $request){
        $lang = App::getLocale();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);

        $data = Template::where('category_id',$request->idCatecory)->get();
        return response()->json( array('success' => true, 'data'=>$data));

    }

    //get one template
    public function getOneTemplate(Request $request)
    {
        $lang = App::getLocale();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
        $isClientLogin  = TahaqqSessionInfo::IsClientLogin();

        return view('getOneTemplate')->with("templateOne",Template::findOrFail($request->id))
                ->with('menus',Menu::orderBy('sort','asc')->get())
                ->with('sysVarFooter', $sysVarFooter)
                ->with('sysVarSocialMedia',$sysVarSocialMedia)
                ->with('categoris',TemplateCategory::get())
                ->with('isClientLogin',$isClientLogin);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = TemplateCategory::all();
        return view('admin.templates.create', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request);
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        // $out->writeln(json_encode($request->all()));
        // return back()->with('req', json_encode($request->all()));
        //
        $data = request()->validate([
            'title_ar' => 'required',
            'title_en'=> 'required',
            'name' => 'required'
        ]);

        $t = new Template();
        $t->name = $request->name;
        $t->title_ar = $request->title_ar;
        $t->title_en = $request->title_en;
        $t->small_details_ar = $request->small_details_ar;
        $t->small_details_en = $request->small_details_en;
        $t->details_ar = $request->details_ar;
        $t->details_en = $request->details_en;
        $t->category_id = $request->category_id;
        $t->image_url = $request->image;
        $t->preview_url = $request->preview_url;
        $t->save();
        $templateId = $t->id;

        $templateSpecificationParamStr  = $request->templateSpecification;
        $tsManage  = json_decode($templateSpecificationParamStr,true);

        if(count($tsManage) >=1){
            for ($i=0; $i < (count($tsManage) / 4) ; $i++) {
                $ts_id =  $tsManage['['.$i.'][ts_id]'];
                $ts_img =  $tsManage['['.$i.'][ts_img]'];
                $ts_text_ar =  $tsManage['['.$i.'][ts_text_ar]'];
                $ts_text_en =  $tsManage['['.$i.'][ts_text_en]'];
                $ts = null;
                if(empty($ts_id)){
                    $ts = new TemplateSpecification();
                    $ts->template_id = $templateId;
                }else{
                    $ts = TemplateSpecification::findOrFail($ts_id);
                }

                $ts->text_ar = $ts_text_ar;
                $ts->text_en = $ts_text_en;
                $ts->image = $ts_img;
                $ts->save();
            }
        }
        return redirect('/pg-admin/templates')->with('success','save succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $template = Template::findOrFail($id);
        $categories = TemplateCategory::all();
        $templateSpecifications = TemplateSpecification::where('template_id',$id)->get();
        $ts_array = array();
        foreach ($templateSpecifications as $ts) {
            array_push($ts_array,array(
                "ts_id"=>$ts->id,
                "ts_img"=>$ts->image,
                "ts_text_ar"=>$ts->text_ar,
                "ts_text_en"=>$ts->text_en,
            ));
        }
        $tsJson = json_encode($ts_array);
        return view('admin.templates.edit', compact(['template','tsJson','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = request()->validate([
            'title_ar' => 'required',
            'title_en'=> 'required',
            'name' => 'required'
        ]);

        $t = Template::findOrFail($id);
        $t->name = $request->name;
        $t->title_ar = $request->title_ar;
        $t->title_en = $request->title_en;
        $t->small_details_ar = $request->small_details_ar;
        $t->small_details_en = $request->small_details_en;
        $t->details_ar = $request->details_ar;
        $t->details_en = $request->details_en;
        $t->category_id = $request->category_id;
        $t->image_url = $request->image_url;
        $t->preview_url = $request->preview_url;
        $t->save();
        $templateId = $t->id;

        $templateSpecificationParamStr  = $request->templateSpecification;
        $tsManage  = json_decode($templateSpecificationParamStr,true);

        if(count($tsManage) >=1){
            for ($i=0; $i < (count($tsManage) / 4) ; $i++) {
                $ts_id =  $tsManage['['.$i.'][ts_id]'];
                $ts_img =  $tsManage['['.$i.'][ts_img]'];
                $ts_text_ar =  $tsManage['['.$i.'][ts_text_ar]'];
                $ts_text_en =  $tsManage['['.$i.'][ts_text_en]'];
                $ts = null;
                if(empty($ts_id)){
                    $ts = new TemplateSpecification();
                    $ts->template_id = $templateId;
                }else{
                    $ts = TemplateSpecification::findOrFail($ts_id);
                }

                $ts->text_ar = $ts_text_ar;
                $ts->text_en = $ts_text_en;
                $ts->image = $ts_img;
                $ts->save();
            }
        }
        return back()->with('success','save succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        //
    }
}
