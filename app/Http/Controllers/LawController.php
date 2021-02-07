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
}
