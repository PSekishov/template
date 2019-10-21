<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Home;

class Home extends Model
{
    public function index(){
        return view('/');
    }
}
