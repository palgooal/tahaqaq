<?php

namespace App\Logic\APIClient\APIResult;

class CreateSsoTokenResult{
    public $isSuccess;
    public $clientId;
    public $accessToken;
    public $redirectUrl;

    public function __construct($isSuccess)
    {
        $this->isSuccess = $isSuccess;
    }
}