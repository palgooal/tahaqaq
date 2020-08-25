<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Logic\SysVar\SysVarLogic;
use App\Logic\SysVar\SysVarTypes;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\App;

class LoginController extends Controller
{

    private $sysVarLogic;

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sysVarLogic = new SysVarLogic();
        $this->middleware('guest')->except('logout');
    }

    public function getLogin() {
        // $departments = Department::orderBy('department_name', 'asc')->get();
        dump('asd');
        $lang = App::getLocale();
        $loginActionUrl = $this->sysVarLogic->GetValueByKey(SysVarTypes::Type_Setting, SysVarTypes::Type_Setting_Key_LoginActionUrl, $lang);
        dump($loginActionUrl);
        return view('auth.login', compact('loginActionUrl','user'));
     }
}
