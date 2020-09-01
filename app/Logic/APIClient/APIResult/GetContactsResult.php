<?php

namespace App\Logic\APIClient\APIResult;

class GetContactResult{
    public $isSuccess;
    public $clientId;
    public $firstname;
    public $lastname;
    public $email;
    public $fullContactInfoObj;

    public function __construct($issuccess)
    {
        $this->isSuccess = $issuccess;
    }

    public function getFullName(){
        return $this->firstname . ' ' . $this->lastname;
    }
}
