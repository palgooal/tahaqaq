<?php

namespace App\Logic\APIClient\APIParameter;

class AddClientParameter{
    public $firstname;
    public $lastname;
    public $companyname;
    public $email;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $postcode;
    public $country;
    public $phonenumber;
    public $password2;
    public $groupid;
    public $clientip;

    public function GetDataAsArray(){
        return array(
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'companyname'=>$this->companyname,
            'email'=>$this->email,
            'address1'=>$this->address1,
            'address2'=>$this->address2,
            'city'=>$this->city,
            'state'=>$this->state,
            'postcode'=>$this->postcode,
            'country'=>$this->country,
            'phonenumber'=>$this->phonenumber,
            'password2'=>$this->password2,
            'groupid'=>$this->groupid,
            'clientip'=>$this->clientip
        );
    }
}
