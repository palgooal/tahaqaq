<?php

namespace App\Logic\SysVar\Lang;

use Illuminate\Support\Str;
use App\Logic\SysVar\Lang\sysvarAR;
use App\Logic\SysVar\Lang\sysvarEN;

use function Psy\debug;

class sysvarLangHelper
{
    public static $dataAR = array(
            "Title"=>"عنوان",
            "Details"=>"تفاصيل",
            "Start Now Url"=>"رابط ابدء"
    );

    public static $dataEN = array(
            "Title"=>"Title",
            "Details"=>"Details",
            "Start Now Url"=>"Start Url"
    );

    public static function translate($key,$lang){
        $result = null;
        switch ($lang) {
            case 'ar':
                if(array_key_exists($key,self::$dataAR))
                    $result = self::$dataAR[$key];
                break;
            case 'en':
                if(array_key_exists($key,self::$dataEN))
                    $result = self::$dataEN[$key];
                break;
        }
        if($result == null)
            $result = $key;
        return $result;
    }
}
