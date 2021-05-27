<?php

namespace App\Http\Controllers;

use App\Model\said;
use Illuminate\Http\Request;
use App\Logic\SysVar\SysVarLogic;
use App\Logic\SysVar\SysVarTypes;
use App\User;
use App\Model\Menu;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
class SaidController extends Controller
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
        $users  = User::get();
        $said = said::orderBy('id','desc')->get();
        return view('admin.said.indexSaid', compact('users', 'said'));
    }

    // public function enterSaid(){

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        $lang = App::getLocale();
        $menus = Menu::get();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
        return view('enterSaid',compact(['sysVarFooter','sysVarSocialMedia','menus']));
    }


    public function pinSaid(Request $request, $id, $isChecked){
        $said = said::find($id);
        $said->pin_to_said = $request->isChecked;
        $said->save();

        return response('ok', 200)->header('Content-Type', 'text/plain');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          if ($request->file('image')) {
            $imagePath = $request->file('image');
            $imageName = $imagePath->getClientOriginalName();
  
            $path = $request->file('image')->storeAs('images', time().$imageName);
          }

        $data = new said();
        $data->name = $request->name;
        $data->work = $request->work;
        $data->message = $request->message;
        $data->image_url = "/images/".$path;
        $data->save();
        return back()->with('success', 'تم ارسال الرسالة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\said  $said
     * @return \Illuminate\Http\Response
     */
    public function show(said $said)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\said  $said
     * @return \Illuminate\Http\Response
     */
    public function edit(said $said)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\said  $said
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, said $said)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\said  $said
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
            $said = said::findOrFail($request->said_id);
            $said->delete();
            return back()->with('delete',trans('تم الحذف  بنجاح'));
        
    }
}
