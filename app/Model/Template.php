<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    //
    function getTitle($lang){
        switch ($lang) {
            case 'en':
                return $this->title_en;
            case 'ar':
                return $this->title_ar;
        }
    }

    function getSmall_details($lang){
        switch ($lang) {
            case 'en':
                return $this->small_details_en;
            case 'ar':
                return $this->small_details_ar;
        }
    }

    function getDetails($lang){
        switch ($lang) {
            case 'en':
                return $this->details_en;
            case 'ar':
                return $this->details_ar;
        }
    }
}
