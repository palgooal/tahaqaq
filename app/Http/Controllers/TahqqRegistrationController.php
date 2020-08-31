<?php

namespace App\Http\Controllers;

use App\Logic\APIClient\APIParameter\AddClientParameter;
use App\Logic\APIClient\WhmcsAPILogic;
use App\Model\TahqqRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Logic\SysVar\SysVarTypes;
use App\Logic\SysVar\SysVarLogic;
use App\Model\Menu;

class TahqqRegistrationController extends Controller
{
    private $sysVarLogic;
    private $whmcsAPILogic ;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sysVarLogic = new SysVarLogic();
        $this->whmcsAPILogic = new WhmcsAPILogic();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $addClientParam = new AddClientParameter();

        $addClientParam->firstname=$request->firstname;
        $addClientParam->lastname=$request->lastname;
        $addClientParam->email=$request->email;
        $addClientParam->phonenumber=$request->phonenumber;
        $addClientParam->password2=$request->password;

        // $addClientParam->companyname='';
        // $addClientParam->address1='';
        // $addClientParam->address2='';
        // $addClientParam->city='';
        // $addClientParam->state='';
        // $addClientParam->postcode='';
        // $addClientParam->country='';

        $addClientParam->groupid='1';//Test API Tahaqq
        $addClientParam->clientip=request()->ip();

        $result = $this->whmcsAPILogic->AddClient($addClientParam);
        if($result->result == "success")
        {
            $clientid = $result->clientid;
            return 'ok  - ' . $clientid;
        }
        else
            return 'fail';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(TahqqRegistration $tahqqRegistration)
    {
        $lang = App::getLocale();
        $menus = Menu::get();
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
        return view('TahqqRegistration',compact(['menus','sysVarFooter','sysVarSocialMedia']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(TahqqRegistration $tahqqRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahqqRegistration $tahqqRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahqqRegistration $tahqqRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TahqqRegistration  $tahqqRegistration
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $result = $this->whmcsAPILogic->Login($username,$password);
        dump($result);
        if($result->isSuccess)
            ///return redirect($result->createSsoTokenResult->redirectUrl);
            return redirect('/');
        else
            return 'ok';
    }
}
