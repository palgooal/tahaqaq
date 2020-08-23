<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use Illuminate\Http \Request;
use Illuminate\Support\Facades\Session;
use App\Logic\SysVar\SysVarLogic;
use App\Logic\SysVar\SysVarTypes;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    private $sysVarLogic;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->sysVarLogic = new SysVarLogic();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus =  Menu::get();

        $lang = App::getLocale();
        //header vars
        $header_title= $this->sysVarLogic
        ->GetValueByKey(SysVarTypes::Type_Header, SysVarTypes::Type_Header_Key_Title,$lang);
        $header_details = $this->sysVarLogic
        ->GetValueByKey(SysVarTypes::Type_Header, SysVarTypes::Type_Header_Key_Details,$lang);
        $header_startNowUrl = $this->sysVarLogic
        ->GetValueByKey(SysVarTypes::Type_Header, SysVarTypes::Type_Header_Key_StartNowUrl,$lang);
        $header_tryNowUrl = $this->sysVarLogic
        ->GetValueByKey(SysVarTypes::Type_Header, SysVarTypes::Type_Header_Key_TryNowUrl,$lang);

        //why tahaqaq vars
        $header_title = $this->sysVarLogic
        ->GetValueByKey(SysVarTypes::Type_WhyTahaqaq, SysVarTypes::Type_WhyTahaqaq_Key_Title,$lang);
        $header_details = $this->sysVarLogic
        ->GetValueByKey(SysVarTypes::Type_WhyTahaqaq, SysVarTypes::Type_WhyTahaqaq_Key_Details,$lang);

        //footer
        $footer_subscription = $this->sysVarLogic
        ->GetValueByKey(SysVarTypes::Type_Footer, SysVarTypes::Type_Footer_Key_Subscription,$lang);



        return view('index', compact(['menus','header_title','header_details','header_startNowUrl','header_tryNowUrl',
        'footer_subscription']));
    }



    //lang
    function lang($local){
        Session::put('lang', $local);
        return redirect()->back();
    }
}
