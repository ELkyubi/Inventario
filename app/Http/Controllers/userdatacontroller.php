<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\registerequest;

class userdatacontroller extends Controller
{
    public function index(){
        return view('ua.index');
    }

    public function register(registerequest $request){
        $user=User::create($request->validated());
       return redirect('/UA/listausuario')->with('success','Cuenta creada de manera exitosa :D');
    }

    public function create(){
        return view('ua.userup');
    }
    
    public function show(){
       $users=usuario::all();
        return view('ua.userlist', compact('users'));
    }

}
