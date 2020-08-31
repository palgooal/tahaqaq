<?php

namespace App\Logic\APIClient\APIResult;


class ValidateLoginResult{
    //boolean
    public $isSuccess;
    //int
    public $clientId;

    public function __construct($isSuccess)
    {
        $this->isSuccess = $isSuccess;
    }
}
