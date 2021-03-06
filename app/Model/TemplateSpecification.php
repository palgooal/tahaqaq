<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TemplateSpecification extends Model
{
    //

    function getText($lang){
        switch ($lang) {
            case 'en':
                return $this->text_en;
            case 'ar':
                return $this->text_ar;
        }
    }
}
