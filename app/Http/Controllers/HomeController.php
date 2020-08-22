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
        $header_title= $this->sysVarLogic
        ->GetValueByKey(SysVarTypes::Type_Header, SysVarTypes::Type_Header_Key_Title,$lang);
        $header_details = $this->sysVarLogic
        ->GetValueByKey(SysVarTypes::Type_Header, SysVarTypes::Type_Header_Key_Details,$lang);

        return view('index', compact(['menus','header_title','header_details']));
    }



    //lang
    function lang($local){
        Session::put('lang', $local);
        return redirect()->back();
    }
}
