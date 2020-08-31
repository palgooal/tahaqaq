<?php

namespace App\Logic\APIClient\APIResult;

class GetContactResult{
    public $isSuccess;
    public $clientId;
    public $firstname;
    public $lastname;
    public $email;
    public $fullContactInfoObj;

    public function __construct($isSuccess)
    {
        $this->isSuccess = $isSuccess;
    }

    public function getFullName(){
        return $this->firstname . ' ' . $this->lastname;
    }
}