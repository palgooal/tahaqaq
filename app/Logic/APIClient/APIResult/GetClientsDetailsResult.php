<?php

namespace App\Logic\APIClient\APIResult;

class GetClientsDetailsResult
{
    public $isSuccess;
    public $clientsDetailsObj;

    public function __construct($issuccess)
    {
        $this->isSuccess = $issuccess;
    }

    public function SetIsSuccess($isSuccess){
        $this->isSuccess = $isSuccess;
    }

    public function GetIsSuccess(){
       return $this->isSuccess;
    }

    public function SetClientsDetailsObj($clientsDetailsObj){
        $this->clientsDetailsObj = $clientsDetailsObj;
    }

    public function GetClientId(){
        return $this->clientsDetailsObj->client_id;
    }
    public function GetFullName(){
        return $this->clientsDetailsObj->fullname;
    }

    public function GetEmail(){
        return $this->clientsDetailsObj->email;
    }

    public function GetFirstname(){
        return $this->clientsDetailsObj->firstname;
    }

    public function GetLastname(){
        return $this->clientsDetailsObj->lastname;
    }
    public function GetPhoneNumber(){
        return $this->clientsDetailsObj->phonenumber;
    }

}

