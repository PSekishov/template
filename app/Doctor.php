<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    public function profession(){
        return $this->belongsTo('App\Profession');
    }

    public function  setSlugAttribute($value){
        if(!$value){
            $this->attributes['slug'] = str_slug($this->attributes['surnameDoc'],'-');
        }else{
            $this->attributes['slug'] = str_slug($value,'-');
        }
    }

    public function getImgPathAttribute($value){
        return $value ? $value : '/images/noImage.png';
    }
}
