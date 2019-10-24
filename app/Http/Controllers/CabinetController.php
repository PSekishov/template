<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//для версии 5.2 и ранее:
use DB;
use App\Cabinet;


class CabinetController extends Controller
{


    public function cabinet(){
        return view('cabinet.index');
    }


    public function mydoctor(){
        $professions = DB::table('professions')->select('prof','imgPath')->get();
        return view('cabinet.mydoctor',compact('professions'));
    }

    public function aboutme(){
        return view('cabinet.aboutme');
    }

    public function show($id){
        return view('cabinet.index',compact('test'));
    }


}
