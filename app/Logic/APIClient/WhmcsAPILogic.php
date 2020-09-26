<?php

namespace App\Logic\APIClient;

use App\Logic\APIClient\APIParameter\AddClientParameter;
use App\Logic\APIClient\WhmcsAPIActions;
use App\Logic\APIClient\APIResult\LoginResult;
use App\Logic\APIClient\APIResult\ValidateLoginResult;
use App\Logic\APIClient\APIResult\CreateSsoTokenResult;
use App\Logic\APIClient\APIResult\GetClientsDetailsResult;
use App\Logic\TahaqqSessionInfo;
use App\Logic\APIClient\APIResult\GetContactResult;
use Illuminate\Support\Facades\Http;

class WhmcsAPILogic{

    const WHMCS_LOGIN_URL = "https://client.tahqq.com/dologin.php";
    const Whmcs_API_URL = "https://client.tahqq.com/includes/api.php";

    const username = "ahmedk";
    const password =  "Ahm1989";
    const api_identifier = "f4AuN2YuNa3BW44SSu85i1r4N54SWAJ7";//"YYQJND7dngu3C4hdnV6W6ynCpWYtjnlA";
    const api_secret ="h8ul4RKbnf37XEBHszUHlGSAJHR6NW5U";// "uWgy1FPS6CnxFX77vZiuSFbBAimr3Ssy";

    public function AddClient(AddClientParameter $addClientParam){
        // Set post values
        // $postfields = array(
        //     'username' => WhmcsAPILogic::username,
        //     'password' => WhmcsAPILogic::password,
        //     'identifier' => WhmcsAPILogic::api_identifier,
        //     'secret' => WhmcsAPILogic::api_secret,
        //     'action' => WhmcsAPILogic::API_AddClient,
        //     'responsetype' => 'json',
        // );

        if(env('APP_ENV') == 'local')
        {
            return json_decode('{"result":"success","clientid":1}');
        }

        $postfields = $this->getPostFileArray($addClientParam->GetDataAsArray(true),WhmcsAPIActions::Client_AddClient);
        return $this->callAPI($postfields);
    }

    public function SaveClientProjectInfo(int $clientId,string $projectName,string $projectCategory,string $projectDetails,bool $SetClientRegisterProgress){

        $customfieldsArray = array(
            'ProjectName' => $projectName,
            'ProjectCategory' => $projectCategory,
            'ProjectDetails' => $projectDetails,
        );
        if($SetClientRegisterProgress == true){
            $crp = array('ClientRegisterProgress'=>WhmcsClientRegisterProgress::CompleteProjectInfo);
            $customfieldsArray = array_merge($customfieldsArray, $crp);
            // array_push($customfieldsArray,['ClientRegisterProgress'=>WhmcsClientRegisterProgress::CompleteProjectInfo]);
        }

        $customfields = base64_encode(serialize($customfieldsArray));
        $postfields = $this->getPostFileArray(array(
            "clientid"=>$clientId,
            "customfields"=>$customfields
        ), WhmcsAPIActions::Client_UpdateClient);
        $result = $this->callAPI($postfields);
        if($result->result == "success")
        {
            $clientDetailResult = $this->GetClientsDetails($clientId);
            if(!$clientDetailResult->GetIsSuccess()){
                return false;
            }
            TahaqqSessionInfo::SetClientDetailsResult($clientDetailResult);
            return true;
        }
        return false;
    }

    private function getPostFileArray($CURLOPT_POSTFIELDS_ARRAY, $action){
        $connectionInfo = array(
            'username' => WhmcsAPILogic::username,
            'password' => WhmcsAPILogic::password,
            'identifier' => WhmcsAPILogic::api_identifier,
            'secret' => WhmcsAPILogic::api_secret,
            'action' => $action,
            'responsetype' => 'json'
        );

        return array_merge($connectionInfo, $CURLOPT_POSTFIELDS_ARRAY);
    }

    private function callAPI($postfields){
                // Call the API
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, WhmcsAPILogic::Whmcs_API_URL);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_TIMEOUT, 30);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
                $response = curl_exec($ch);
                if (curl_error($ch)) {
                    die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
                }
                curl_close($ch);
                // Decode response
                $jsonData = json_decode($response, false);
                // Dump array structure for inspection
                return $jsonData;
    }

    public function Login($email, $password){
        $loginResult = new LoginResult(false);
        if(env('APP_ENV') == 'local')
        {
            $ssoResult = new CreateSsoTokenResult(true);
            $ssoResult->clientId= 1;
            $ssoResult->accessToken = "token";
            $ssoResult->redirectUrl = "http://client.tahqq.com/admin";

            $clientDetailResult = new GetClientsDetailsResult(true);
            $client =json_decode('{
                "client_id":1,
                "fullname":"user user",
                "email":"'.$email.'",
                "firstname":"user",
                "lastname":"user",
                "phonenumber":"055646",
                "customfields1":"Ecommerce",
                "customfields2":"Ecommerce Templates",
                "customfields3":"ecommerseecommerseecommerseecommerse ecommerse",
                "customfields4":"CompleteProjectInfo"

            }', false);
            $clientDetailResult->SetClientsDetailsObj($client);

            $loginResult->isSuccess = true;
            $loginResult->clientId = 1;
            $loginResult->email = $email;
            $loginResult->createSsoTokenResult = $ssoResult;
            $loginResult->clientDetailsResult = $clientDetailResult;
            $loginResult->message= "Login succrssfully";
            TahaqqSessionInfo::CompleteClientLogin($loginResult,$ssoResult,$clientDetailResult,true);

            return $loginResult;
        }

        $validateLoginResult = $this->ValidateLogin($email, $password);
        if(!$validateLoginResult->isSuccess){
            $loginResult->isSuccess = false;
            $loginResult->message = "اسم المستخدم او كلمة المرور غير صحيحة";
            return $loginResult;
        }

        $clientDetailResult = $this->GetClientsDetails($validateLoginResult->clientId);
        // if($clientDetailResult->status == "Active"){

        // }
        // if($clientDetailResult->email_verified == true){

        // }
        if(!$clientDetailResult->GetIsSuccess()){
            $loginResult->isSuccess = false;
            $loginResult->message = "لايوجد ملف تعريفي للمستخدم";
            return $loginResult;
        }

        $isClientHasOrder = null;//$this->IsClientHasOrder($validateLoginResult->clientId);

        $ssoResult = $this->CreateSsoToken($validateLoginResult->clientId, null, null, null, null);
        if(!$ssoResult->isSuccess){
            $loginResult->isSuccess = false;
            $loginResult->message = "اسم المستخدم او كلمة المرور غير صحيحة";
            return $loginResult;
        }

        $loginResult->isSuccess = true;
        $loginResult->clientId = $ssoResult->clientId;
        $loginResult->email = $email;
        $loginResult->createSsoTokenResult = $ssoResult;
        $loginResult->clientDetailsResult = $clientDetailResult;
        $loginResult->message= "تم تسجيل الدخول بنجاح";

        TahaqqSessionInfo::CompleteClientLogin($loginResult,$ssoResult,$clientDetailResult,$isClientHasOrder);

        return $loginResult;
    }

    public function Logout(){
        TahaqqSessionInfo::ClientLogout();
    }

    public function ValidateLogin($email, $password){
        $postfields = $this->getPostFileArray(array(
            "email"=>$email,
            "password2"=>$password
        ), WhmcsAPIActions::Auth_ValidateLogin);
        $result = $this->callAPI($postfields);

        $validateLoginResult= new ValidateLoginResult(false);

        if($result != null && $result->result == "success"){
            $validateLoginResult->isSuccess =  true;
            $validateLoginResult->clientId = $result->userid;
        }
        return $validateLoginResult;
    }

    //more details about destination parameter go to https://docs.whmcs.com/WHMCS_Single_Sign-On_Developer_Guide#Supported_Destinations
    public function CreateSsoToken($clientId,$destination,$sso_redirect_path,$service_id,$domain_id){
        $createSsoTokenResult = new CreateSsoTokenResult(false);
        $arry = array(
            "client_id"=>$clientId,
            // "destination"=>"sso:custom_redirect",
            // "sso_redirect_path"=>"cart.php?a=checkout",
            // "destination"=>"clientarea:product_details clientarea:profile",
            // "service_id"=>"1"
        );
        if(isset($destination)){
            $newItem = array('destination'=>$destination);
            $arry = array_merge($arry, $newItem );
        }
        if(isset($sso_redirect_path)){
            $newItem = array('sso_redirect_path'=>$sso_redirect_path);
            $arry = array_merge($arry, $newItem );
        }
        if(isset($service_id)){
            $newItem = array('service_id'=>$service_id);
            $arry = array_merge($arry, $newItem );
        }
        if(isset($domain_id)){
            $newItem = array('domain_id'=>$domain_id);
            $arry = array_merge($arry, $newItem );
        }

        $postfields = $this->getPostFileArray($arry, WhmcsAPIActions::Auth_CreateSsoToken);
        $result = $this->callAPI($postfields);
        $createSsoTokenResult->isSuccess = $result->result == "success";
        if($createSsoTokenResult->isSuccess){
            $createSsoTokenResult->clientId = $clientId;
            $createSsoTokenResult->accessToken = $result->access_token;
            $createSsoTokenResult->redirectUrl = $result->redirect_url;
        }
        return $createSsoTokenResult;
    }

    public function GetContact($userId){
        //GetContacts
        // userid
        $contactResult = new GetContactResult(false);
        $postfields = $this->getPostFileArray(array(
            "userid"=>$userId,
            // "destination"=>"clientarea:product_details clientarea:profile",
            // "service_id"=>"1"
        ), WhmcsAPIActions::Client_GetContacts);

        $result = $this->callAPI($postfields);

        if($result->result == "success" && $result->totalresults == 1){
            $contactObj = $result->contacts[0];
            $contactResult->isSuccess = true;
            $contactResult->clientId =$contactObj->userid;
            $contactResult->firstname = $contactObj->firstname;
            $contactResult->lastname = $contactObj->lastname;
            $contactResult->email = $contactObj->email;
            $contactResult->fullContactInfoObj = $contactObj;
        }
        return $contactResult;
    }

    public function GetClientsDetails($clientId){
        //GetContacts
        // userid
        $clientDetailsResult = new GetClientsDetailsResult(false);
        $postfields = $this->getPostFileArray(array(
            "clientid"=>$clientId,
            "stats"=>false
            // "destination"=>"clientarea:product_details clientarea:profile",
            // "service_id"=>"1"
        ), WhmcsAPIActions::Client_GetClientsDetails);

        $result = $this->callAPI($postfields);

        if($result->result == "success" ){
            $clientObj = $result->client;
            $clientDetailsResult->SetIsSuccess(true);
            $clientDetailsResult->SetClientsDetailsObj($clientObj);
        }
        return $clientDetailsResult;
    }

    public function GetProducts($productId, $groupId){

        $postfields = $this->getPostFileArray(array(
            // "pid"=>1,
            // "gid"=>1
        ), WhmcsAPIActions::Prod_GetProducts);

        $result = $this->callAPI($postfields);
        if($result->result == "success" ){

        }
        return $result;
    }


    public function WhmcsDirectShoppingCartLink($pid){
        $url = 'https://client.tahqq.com/cart.php?a=add&pid='.$pid;

        $clientId = TahaqqSessionInfo::GetLoggedClientId();
        if($clientId == null || empty($clientId) || !isset($clientId ))
        {
            // return 'invalid process, client is not signin';
            return 'حدث خطأ اثناء تنفيذ العملية، يرجى تسجيل الدخول';
        }

        $ssoResult = $this->CreateSsoToken($clientId, null, null, null, null);
        return $ssoResult;

    }

    public function IsClientHasOrder($clientId){
        if(env('APP_ENV') == 'local')
        {
          return true;
        }
        $postfields = $this->getPostFileArray(array(
            "userid"=>$clientId
        ), WhmcsAPIActions::Client_GetOrders);
        $result = $this->callAPI($postfields);

        return ($result->result == "success" && $result->totalresults >0);
    }

}
