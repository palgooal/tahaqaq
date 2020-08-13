<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SysVar extends Model
{
    //

    function getValue($lang){
        switch ($lang) {
            case 'en':
                return $this->value_en;
            case 'ar':
                return $this->value_ar;
        }
    }
}
