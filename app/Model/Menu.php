<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    function getname($lang){
        switch ($lang) {
            case 'en':
                return $this->name_en;
            case 'ar':
                return $this->name_ar;
        }
    }
}
