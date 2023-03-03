<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcontroller extends Controller
{

    public function create(){
        return view('ua.productup');
    }

    public function show(){
        return view('ua.productlist');
    }

}
