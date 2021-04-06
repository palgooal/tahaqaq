<?php

namespace App\Http\Controllers;

use App\Logic\SysVar\SysVarTypes;
use App\Logic\SysVar\SysVarLogic;
use App\Model\Menu;
use App\Model\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Logic\TahaqqSessionInfo;
use App\User;

class PageController extends Controller
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
        return view('admin.pages.IndexPages')->with('pages', Page::get())->with('users',User::get());


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.AddPages')->with('users', User::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title_ar' => 'required',
            'content_ar' => 'required',
            'tags' => 'required',
            'description_ar' => 'required',
        ]);

        $slug = str_replace(' ','-', $request->title_en ==null) ? str_replace(' ','-',$request->title_ar) : str_replace(' ','-',$request->title_ar)  ;
        //$slug = Str::slug($request->title_en ==null) ? Str::slug($request->title_ar) : Str::slug($request->title_en)  ;
        $page = new Page();
        $page->slug = $slug;
        $page->title_ar = $request->title_ar;
        $page->content_ar = $request->content_ar;
        $page->title_en = $request->title_en;
        $page->content_en = $request->content_en;
        $page->tags = $request->tags;
        $page->description_ar = $request->description_ar;
        $page->description_en = $request->description_en;
        $page->save();
        return redirect('/pg-admin/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $lang = App::getLocale();

        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);

        return view('pages',compact(['sysVarFooter','sysVarSocialMedia']))->with('page', Page::where('slug', $slug)->first())
                            ->with('menus', Menu::get());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.EditPages')->with('pages', Page::find($id))->with('users', User::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //$slug = Str::slug($request->title_en ==null) ? Str::slug($request->title_ar) : Str::slug($request->title_en)  ;
        $page = $page;
        $page->slug = str_replace(' ','-', $request->slug);;
        $page->title_ar = $request->title_ar;
        $page->content_ar = $request->content_ar;
        $page->title_en = $request->title_en;
        $page->content_en = $request->content_en;
        $page->tags = $request->tags;
        $page->description_ar = $request->description_ar;
        $page->description_en = $request->description_en;
        $page->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $page = Page::findOrFail($request->page_id);
        $page->delete();
        return back()->with('delete',trans('تم الحذف  بنجاح'));
    }

    public function pricingpage(){
        $lang = App::getLocale();
        $menus = Menu::get();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
        return view('pricing', compact('sysVarFooter', 'lang', 'sysVarSocialMedia', 'menus'));
    }
}
