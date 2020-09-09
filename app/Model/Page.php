<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    function getcontent($lang){
        switch ($lang) {
            case 'en':
                return $this->content_en;
            case 'ar':
                return $this->content_ar;
        }
    }
    function getTitle($lang){
        switch ($lang) {
            case 'en':
                return $this->title_en;
            case 'ar':
                return $this->title_ar;
        }
    }


}
