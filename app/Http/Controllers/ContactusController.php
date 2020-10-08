<?php

namespace App\Http\Controllers;

use App\Model\Contactus;
use App\Model\Menu;
use App\Logic\SysVar\SysVarTypes;
use App\Logic\SysVar\SysVarLogic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Logic\TahaqqSessionInfo;
use App\User;

class ContactusController extends Controller
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
        return view('admin.contact.contact')->with('contacts', Contactus::paginate(10))
        ->with('users', User::get());
    }

    public function viewAll()
    {
        $lang = App::getLocale();
        $menus = Menu::get();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
        $isClientLogin  = TahaqqSessionInfo::IsClientLogin();
        return view('Contactus',compact(['menus','sysVarFooter','sysVarSocialMedia','isClientLogin']));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contactus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Contactus();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.contact.showContact')->with('contact',Contactus::find($id))
        ->with('users', User::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactus $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactus $contactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Contactus::findOrFail($request->contact_id);
        $data->delete();
        return back()->with('delete',trans('تم الحذف  بنجاح'));
    }
}
