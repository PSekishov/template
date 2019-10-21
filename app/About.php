<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public function about(){
        return view('about');
    }
}
