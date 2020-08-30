<?php

namespace App\Logic\APIClient;

use App\Logic\APIClient\APIParameter\AddClientParameter;
use App\Logic\APIClient\WhmcsAPIActions;
use App\Logic\APIClient\APIResult\LoginResult;
use App\Logic\APIClient\APIResult\ValidateLoginResult;


class WhmcsAPILogic{

    const WHMCS_LOGIN_URL = "https://clientgooal.palgooal.com/dologin.php";
    const Whmcs_API_URL = "https://clientgooal.palgooal.com/includes/api.php";

    const username = "ahmedk";
    const password =  "ahm1989";
    const api_identifier = "YYQJND7dngu3C4hdnV6W6ynCpWYtjnlA";
    const api_secret = "uWgy1FPS6CnxFX77vZiuSFbBAimr3Ssy";

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

        $postfields = $this->getPostFileArray($addClientParam->GetDataAsArray(true),WhmcsAPIActions::Client_AddClient);
        return $this->callAPI($postfields);
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
                $jsonData = json_decode($response, true);
                // Dump array structure for inspection
                dump($jsonData);

                return $jsonData;
    }

    public function Login($email, $password){
        $loginResult = new LoginResult(false);

        $validateLoginResult = $this->ValidateLogin($email, $password);
        if(!$validateLoginResult->isSuccess){
            $loginResult->isSuccess = false;
            $loginResult->message = "User not found";
            return $loginResult;
        }

        $ssoResult = $this->CreateSsoToken($validateLoginResult->clientId);
        if(!$ssoResult->isSuccess){
            $loginResult->isSuccess = false;
            $loginResult->message = "Invalid username or password";
            return $loginResult;
        }
    
        $loginResult->isSuccess = true;
        $loginResult->clientId = $ssoResult->clientId;
        $loginResult->email = $email;
        $loginResult->createSsoTokenResult = $ssoResult;
        $loginResult->message= "Login succrssfully";
    }

    public function ValidateLogin($email, $password){
        $postfields = $this->getPostFileArray(array(
            "email"=>$email,
            "password2"=>$password
        ), WhmcsAPIActions::Auth_ValidateLogin);
        $result = $this->callAPI($postfields);
        $validateLoginResult= new ValidateLoginResult();

        $validateLoginResult->isSuccess = $result->result == "success";
        $validateLoginResult->clientId = $result->clientid;
        return $validateLoginResult;
    }


    public function CreateSsoToken($clientId){
        $createSsoTokenResult = new CreateSsoTokenResult();
        $postfields = $this->getPostFileArray(array(
            "client_id"=>"",
            // "destination"=>"clientarea:product_details clientarea:profile",
            // "service_id"=>"1"
        ), WhmcsAPIActions::Auth_CreateSsoToken);
        $result = $this->callAPI($postfields);
        $createSsoTokenResult->isSuccess = $result->result == "success";
        $createSsoTokenResult->clientId = $clientId;
        $createSsoTokenResult->accessToken = $result->access_token;
        $createSsoTokenResult->redirectUrl = $result->redirect_url;

        return $createSsoTokenResult;
    }

    public function GetContacts($userId){
        //GetContacts
        //userid
    }
}
