<?php


namespace App\Logic;
use App\Logic\APIClient\APIResult\LoginResult;
use Illuminate\Support\Facades\Session;

class  TahaqqSessionInfo{

    public static function CompleteClientLogin(LoginResult $loginResult){
        if($loginResult->isSuccess){
            Session::put('isClientLogin','true');
            Session::put('loginResultJson',json_encode($loginResult));
            Session::put('clientId',$loginResult->clientId);
            Session::put('email',$loginResult->email);
            Session::put('fullName',$loginResult->clientDetailsResult->getFullName());

            Session::put('accessToken',$loginResult->createSsoTokenResult->accessToken);
            Session::put('redirectUrl',$loginResult->createSsoTokenResult->redirectUrl);
        }
    }
    public static function ClientLogout(){
        Session::flush();
    }

    public static function IsClientLogin(){
        return Session::get('isClientLogin') == 'true';
    }

    public static  function GetLoggedClientName(){
        return  Session::get('fullName');
    }

    public  static function GetLoggedClientEmail(){
        return  Session::get('email');
    }

    public  static function GetLoggedClientAccessToken(){
        return  Session::get('accessToken');
    }
    public  static function GetLoggedClientRedirectUrl(){
        return  Session::get('redirectUrl');
    }
}
