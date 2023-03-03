<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriescontroller extends Controller
{

    public function create(){
        return view('ua.catup');
    }

    public function show(){
        return view('ua.catlist');
    }
}
