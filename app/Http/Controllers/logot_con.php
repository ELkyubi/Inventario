<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
USE Illuminate\Support\Facades\Session;

class logot_con extends Controller
{
    public function logout(){

        Session::flush();

        Auth::logout();

        return redirect()->to('/');
    }
}
