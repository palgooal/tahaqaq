<?php

namespace App\Logic\APIClient;

use App\Logic\APIClient\APIParameter\AddClientParameter;

class WhmcsAPILogic{
    const Whmcs_API_URL = "https://clientgooal.palgooal.com/includes/api.php";
    const API_AddClient = "AddClient";
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

        dump($addClientParam);
        $postfields = $this->getPostFileArray($addClientParam->GetDataAsArray(), true);
        dump($postfields);
        return $this->callAPI($postfields);
    }

    private function getPostFileArray($CURLOPT_POSTFIELDS_ARRAY, $skipvalidation){
        $connectionInfo = array(
            'username' => WhmcsAPILogic::username,
            'password' => WhmcsAPILogic::password,
            'identifier' => WhmcsAPILogic::api_identifier,
            'secret' => WhmcsAPILogic::api_secret,
            'action' => WhmcsAPILogic::API_AddClient,
            'responsetype' => 'json',
            'skipvalidation'=> $skipvalidation,
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
}


