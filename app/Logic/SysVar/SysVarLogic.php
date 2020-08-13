<?php

namespace App\Logic\SysVar;

use App\Model\SysVar;
use Illuminate\Support\Facades\App;

class SysVarLogic{

    public function GetAll()
    {
        return SysVar::get();
    }

    public function GetAllPagination($pageSize){
        return SysVar::paginate($pageSize);
    }

    public function Get($id){
        return SysVar::findOrFail($id);
    }

    public function GetByType($sysVarType){
        return SysVar::where('type',$sysVarType)->get();
    }

    public function GetByKey($sysVarType,$sysVarKey){
        return SysVar::where([
            ['type',$sysVarType],
            ['key', $sysVarKey]
        ])->get();
    }

    public function GetTypes(){
        return SysVar::select('type')->distinct()->get();
    }
}
