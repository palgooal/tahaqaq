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
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->client_id ?? '';
        return '' ;
    }
    public function GetFullName(){
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->fullname ?? '';
            return '';
    }

    public function GetEmail(){
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->email ??'';
        return '';
    }

    public function GetFirstname(){
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->firstname ??'';
        return '';
    }

    public function GetLastname(){
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->lastname??'';
            return '';
    }
    public function GetPhoneNumber(){
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->phonenumber??'';
        return '';
    }

    public function GetProductName(){
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->customfields1??'';
        return '';
    }
    public function GetProjectCategory(){
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->customfields2??'';
        return '';
    }
    public function GetProjectDetails(){
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->customfields3??'';
        return '';
    }
    public function GetClientRegisterProgress(){
        if($this->clientsDetailsObj != null)
            return $this->clientsDetailsObj->customfields4??'';
        return '';
    }

}

