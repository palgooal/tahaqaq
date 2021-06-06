<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Logic\SysVar\SysVarLogic;
use App\Logic\SysVar\SysVarTypes;
use App\Model\Blog;
use Illuminate\Support\Facades\App;
use App\Logic\TahaqqSessionInfo;
use App\Model\Package;
use App\Model\pricing;
use App\User;
use App\Model\Template;
use App\Model\said;
use App\Model\ouer_client;

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
        $blogs  = Blog::orderBy('created_at','DESC')->get();
        $users = user::get();

        $lang = App::getLocale();
        $packages = pricing::get();

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

        //tahaqq info section
        $sysVarTahaqaqInfo1 = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_TahaqaqInfo1,$lang);
        $sysVarTahaqaqInfo2 = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_TahaqaqInfo2,$lang);
        $sysVarTahaqaqInfo3 = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_TahaqaqInfo3,$lang);
        $sysVarTahaqaqInfo4 = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_TahaqaqInfo4,$lang);

        //footer
        $sysVarFooter = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_Footer,$lang);

        //social media
        $sysVarSocialMedia = $this->sysVarLogic->GetByTypeAsResult(SysVarTypes::Type_SocialMedia,$lang);


        //template
        $templateAll = Template::orderBy('id','desc')->paginate(6);

        $said = said::where('pin_to_said','=',1)->get();
        
        $ouer_clients = ouer_client::orderBy('created_at','DESC')->get();
        // $isClientLogin  = TahaqqSessionInfo::IsClientLogin();
        // $loggedClientName = TahaqqSessionInfo::GetLoggedClientName();
        return view('index', compact(['menus', 'blogs','header_title','header_details','header_startNowUrl','header_tryNowUrl','said','ouer_clients',
        // 'footer_subscription','footer_pricing','footer_blog','footer_about','footer_privacyPolicy','footer_howDoWeWork','footer_contact','footer_services',
        // 'socialMedia_facbook','socialMedia_twitter','socialMedia_instagram','socialMedia_youtube',
       'sysVarWhyTahaqaq', 'sysVarFooter','sysVarSocialMedia','sysVarTahaqaqInfo1','sysVarTahaqaqInfo2','sysVarTahaqaqInfo3','sysVarTahaqaqInfo4','users', 'packages','templateAll']));
    }



    //lang
    function lang($local){
        Session::put('lang', $local);
        return redirect()->back();
    }
}
