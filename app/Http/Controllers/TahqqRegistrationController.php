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
        // $addClientParam->firstname=$this->firstname;
        // $addClientParam->lastname=$this->lastname;
        // $addClientParam->companyname=$this->companyname;
        // $addClientParam->email=$this->email;
        // $addClientParam->address1=$this->address1;
        // $addClientParam->address2=$this->address2;
        // $addClientParam->city=$this->city;
        // $addClientParam->state=$this->state;
        // $addClientParam->postcode=$this->postcode;
        // $addClientParam->country=$this->country;
        // $addClientParam->phonenumber=$this->phonenumber;
        // $addClientParam->password2=$this->password2;
        // $addClientParam->groupid=$this->groupid;
        // $addClientParam->clientip=$this->clientip;
        $addClientParam->firstname='ahmed';
        $addClientParam->lastname='yahiya';
        $addClientParam->companyname='aky';
        $addClientParam->email='ahmed@aky.com';
        $addClientParam->address1='basa';
        $addClientParam->address2='montaza';
        $addClientParam->city='db';
        $addClientParam->state='';
        $addClientParam->postcode='';
        $addClientParam->country='ps';
        $addClientParam->phonenumber='0599036944';
        $addClientParam->password2='102030';
        $addClientParam->groupid='';
        $addClientParam->clientip=request()->ip();

        dump($addClientParam);

        // $a = array('a'=>1,
        //             'b'=>2);
        // $b = array('c'=>3,
        //             'd'=>4);

        // $d = array_merge($a,$b);
        // dump($d);
        $result = $this->whmcsAPILogic->AddClient($addClientParam);
        dump($result);
        return 'ok';
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
}
