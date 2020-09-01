<?php

namespace App\Logic\APIClient\APIResult;

class GetClientsDetailsResult
{
    private $isSuccess;
    private $clientsDetailsObj;

    public function __construct($issuccess)
    {
        $this->isSuccess = $issuccess;
    }

    public function SetIsSuccess($isSuccess){
        $this->isSuccess = $isSuccess;
    }

    public function SetClientsDetailsObj($clientsDetailsObj){
        $this->clientsDetailsObj = $clientsDetailsObj;
    }

    public function getClientId(){
        return $this->clientsDetailsObj->client_id;
    }
    public function getFullName(){
        return $this->clientsDetailsObj->fullname;
    }

    public function getEmail(){
        return $this->clientsDetailsObj->email;
    }

    public function getFirstname(){
        return $this->clientsDetailsObj->firstname;
    }

    public function getLastname(){
        return $this->clientsDetailsObj->lastname;
    }
}

