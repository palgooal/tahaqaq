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
        ])->get()->first();
    }

    public function GetValueByKey($sysVarType,$sysVarKey,$lang){
        return SysVar::where([
            ['type',$sysVarType],
            ['key', $sysVarKey]
        ])->get()->first()->getValue($lang);
    }

    public function GetTypes(){
        return SysVar::select('type')->distinct()->get();
    }

    public function UpdateSysVarValue($id, $lang,$value){
        $obj = SysVar::findOrFail($id);
        switch (strtolower($lang)) {
            case 'ar':
                $obj->value_ar = $value;
                break;
            case 'en':
                $obj->value_en = $value;
                break;
        }

        $obj->save();
    }
}
