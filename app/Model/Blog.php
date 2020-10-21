<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    function getBody($lang){
        switch ($lang) {
            case 'en':
                return $this->Body_en;
            case 'ar':
                return $this->Body_ar;
        }
    }
    function getTitle($lang){
        switch ($lang) {
            case 'en':
                return $this->Title_en;
            case 'ar':
                return $this->Title_ar;
        }
    }
    function getTags($lang){
        switch ($lang) {
            case 'en':
                return $this->Tags_en;
            case 'ar':
                return $this->Tags_ar;
        }
    }
        function getDescribe($lang){
            switch ($lang) {
                case 'en':
                    return $this->meta_Describe_en;
                case 'ar':
                    return $this->meta_Describe_ar;
            }
    }

}
