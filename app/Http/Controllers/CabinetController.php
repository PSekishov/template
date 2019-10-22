<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabinet;

class CabinetController extends Controller
{


    public function cabinet(){
        $test = 45;
        return view('cabinet.index',compact('test'));
    }

    public function show($id){
        return view('cabinet.index',compact('test'));
    }


}
