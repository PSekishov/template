<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cabinet extends Model
{
    public function cabinet(){

        return view('cabinet.index');
    }
}
