<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uacontroller extends Controller
{
   
    public function create(){
        return view('ua.uaup');
    }

    public function show(){
        return view('ua.ualist');
    }

}
