<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profession extends Model
{

    public function  setSlugAttribute($value){
        if(!$value){
            $this->attributes['slug'] = str_slug($this->attributes['prof'],'-');
        }else{
            $this->attributes['slug'] = str_slug($value,'-');
        }
    }

    public function getImgPathAttribute($value){
        return $value ? $value : '/images/noImage.png';
    }
}
