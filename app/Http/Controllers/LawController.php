<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawController extends Controller
{
    public function getTitles(){
        return view('titles');
    }
    //
    public function getComplete(){
        return view('complete');
    }
    //
    public function getTitle1(){
        return view('/titles/title1');
    }
    //
    public function getTitle2(){
        return view('/titles/title2');
    }
    //
    public function getTitle3(){
        return view('/titles/title3');
    }
    //
    public function getTitle4(){
        return view('/titles/title4');
    }
    //
    public function getTitle5(){
        return view('/titles/title5');
    }
    //
    public function getTitle6(){
        return view('/titles/title6');
    }
}
