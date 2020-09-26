<?php


namespace App\Logic;

use App\Logic\APIClient\APIResult\CreateSsoTokenResult;
use App\Logic\APIClient\APIResult\GetClientsDetailsResult;
use App\Logic\APIClient\APIResult\LoginResult;
use App\Logic\APIClient\WhmcsAPILogic;
use Illuminate\Support\Facades\Session;

class  TahaqqSessionInfo{

    public static function CompleteClientLogin(LoginResult $loginResult, CreateSsoTokenResult $ssoResult, GetClientsDetailsResult $clientDetails, $isClientHasOrder){
        if($loginResult->isSuccess){
            Session::put('isClientLogin','true');
            Session::put('loginResultJson',json_encode($loginResult));
            Session::put('clientId',$loginResult->clientId);
            Session::put('email',$loginResult->email);

            // Session::put('fullName',$clientDetails->GetFullName());
            // Session::put('clientDetails',$clientDetails);
            self::SetClientDetailsResult($clientDetails);

            Session::put('ssoResult',$ssoResult);

            Session::put('accessToken',$ssoResult->accessToken);
            Session::put('redirectUrl',$ssoResult->redirectUrl);

            // Session::put('isClientHasOrder', $isClientHasOrder);
        }
    }

    public static function SetClientDetailsResult(GetClientsDetailsResult $clientDetails){
        Session::put('clientDetails',$clientDetails);
        Session::put('fullName',$clientDetails->GetFullName());
    }

    public static function GetLoginResultObj(){
        return json_decode(Session::get('loginResultJson'),false);
    }

    public static function GetLoggedClientDetailsObj(){
     try {
            if(Session::has('clientDetails')){
                // $loginResult = TahaqqSessionInfo::GetLoginResultObj();
                $clientDetailsJson=Session::get('clientDetails');
                // $clientDetailsJson = $loginResult->clientDetailsResult;
                $clientDetailsResult = new GetClientsDetailsResult($clientDetailsJson->isSuccess);
                $clientDetailsResult->SetClientsDetailsObj($clientDetailsJson->clientsDetailsObj);
                return $clientDetailsResult;
            }
            return new GetClientsDetailsResult(false);
        } catch (\Throwable $th) {
            return new GetClientsDetailsResult(false);
        }
    }

    public static function ClientLogout(){
        Session::flush();
    }

    public static function GetLoggedClientId(){
        return Session::get('clientId');
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

    // public static function GetIsClientHasOrder(){
    //     if(env('APP_ENV') == 'local')
    //     {
    //         Session::put('isClientHasOrder',false);
    //         return Session::get('isClientHasOrder');
    //     }

    //     if(!Session::has('isClientHasOrder') && self::GetLoggedClientId() != null){
    //         $whmcsLogic = new WhmcsAPILogic();
    //         $isClientHasOrder = $whmcsLogic->IsClientHasOrder(self::GetLoggedClientId());
    //         //GetIsClientHasOrder(self::GetLoggedClientId());
    //         Session::put('isClientHasOrder',$isClientHasOrder);
    //     }

    //     return Session::get('isClientHasOrder');
    // }

    // public static function RemoveIsClientHasOrderFromSession(){
    //     Session::remove('isClientHasOrder');
    // }


}
