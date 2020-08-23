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
        $sysVarWhyTahaqaq = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_WhyTahaqaq,$lang);

        // $header_title = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_WhyTahaqaq, SysVarTypes::Type_WhyTahaqaq_Key_Title,$lang);
        // $header_details = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_WhyTahaqaq, SysVarTypes::Type_WhyTahaqaq_Key_Details,$lang);

        //footer
        // $footer_subscription = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_Footer, SysVarTypes::Type_Footer_Key_Subscription,$lang);
        // $footer_pricing = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_Footer, SysVarTypes::Type_Footer_Key_Pricing,$lang);
        // $footer_blog = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_Footer, SysVarTypes::Type_Footer_Key_Blog,$lang);
        // $footer_about = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_Footer, SysVarTypes::Type_Footer_Key_About,$lang);
        // $footer_privacyPolicy = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_Footer, SysVarTypes::Type_Footer_Key_PrivacyPolicy,$lang);
        // $footer_howDoWeWork = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_Footer, SysVarTypes::Type_Footer_Key_HowDoWeWork,$lang);
        // $footer_contact = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_Footer, SysVarTypes::Type_Footer_Key_Contact,$lang);
        // $footer_services = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_Footer, SysVarTypes::Type_Footer_Key_Services,$lang);
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);

        //social media
        // $socialMedia_facbook = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_SocialMedia, SysVarTypes::Type_SocialMedia_Facbook,$lang);
        // $socialMedia_twitter = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_SocialMedia, SysVarTypes::Type_SocialMedia_Twitter,$lang);
        // $socialMedia_instagram = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_SocialMedia, SysVarTypes::Type_SocialMedia_Instagram,$lang);
        // $socialMedia_youtube = $this->sysVarLogic
        // ->GetValueByKey(SysVarTypes::Type_SocialMedia, SysVarTypes::Type_SocialMedia_Youtube,$lang);

        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);
        $sysVarTahaqaqInfo1 = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_TahaqaqInfo1,$lang);
        $sysVarTahaqaqInfo2 = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_TahaqaqInfo2,$lang);
        $sysVarTahaqaqInfo3 = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_TahaqaqInfo3,$lang);
        $sysVarTahaqaqInfo4 = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_TahaqaqInfo4,$lang);


        return view('index', compact(['menus','header_title','header_details','header_startNowUrl','header_tryNowUrl',
        // 'footer_subscription','footer_pricing','footer_blog','footer_about','footer_privacyPolicy','footer_howDoWeWork','footer_contact','footer_services',
        // 'socialMedia_facbook','socialMedia_twitter','socialMedia_instagram','socialMedia_youtube',
       'sysVarWhyTahaqaq', 'sysVarFooter','sysVarSocialMedia','sysVarTahaqaqInfo1','sysVarTahaqaqInfo2','sysVarTahaqaqInfo3','sysVarTahaqaqInfo4']));
    }



    //lang
    function lang($local){
        Session::put('lang', $local);
        return redirect()->back();
    }
}
