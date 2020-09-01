<?php

namespace App\Logic\APIClient\APIResult;

class LoginResult{
    public $isSuccess;
    public $clientId;
    public $email;
    public $createSsoTokenResult;
    public $message;
    public $clientDetailsResult;

    public function __construct($isSuccess)
    {
        $this->isSuccess = $isSuccess;
    }
}
