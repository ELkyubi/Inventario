<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class userdatacontroller extends Controller
{
    public function index(){
        return view('ua.index');
    }

    public function create(){
        return view('ua.userup');
    }

    public function show(){
        $users=usuario::all();
        return view('ua.userlist', compact('users'));
    }

}
