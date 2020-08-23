<?php

namespace App\Logic\SysVar;

class SysVarResult{

    private $sysVarType;
    private $sysVarData;
    public function __construct($type, $data)
    {
        $this->sysVarType = $type;
        $this->sysVarData = $data;
    }

    public function GetValue($key){
        return $this->sysVarData[$key];
    }
}
