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
            "Start Now Url"=>"رابط ابدء",
            "Sub Title"=>"عنوان فرعي",
            "Try Now Url"=>"رابط تجربة تحقق",
            "Subscription"=>"الاشتراك",
            "Pricing"=>"الاسعار",
            "Blod"=>"المدونة",
            "About"=>"من نحن",
            "Privacy Policy"=>"سياسة الخصوصية",
            "Terms"=>"الشروط والأحكام",
            "How do we work"=>"كيف نعمل",
            "Contact"=>"اتصل بنا",
            "Services"=>"خدماتنا",

    );

    public static $dataEN = array(
            "Title"=>"Title",
            "Details"=>"Details",
            "Start Now Url"=>"Start Url",
            "Sub Title"=>"Sub Title",
            "Try Now Url"=>"url tahqq",
            "Subscription"=>"Subscription",
            "Pricing"=>"Pricing",
            "Blod"=>"Blog",
            "About"=>"About",
            "Privacy Policy"=>"Privacy Policy",
            "Terms"=>"Terms",
            "How do we work"=>"How do we work",
            "Contact"=>"Contact",
            "Services"=>"Services",




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
