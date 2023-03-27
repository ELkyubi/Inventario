<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginrequest;
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
        if(Auth::check()){
            $user=User::create($request->validated());
            if($user==null){
                return redirect('/UA/listausuario');
            }else{
                return redirect('/UA/listausuario')->with('success','Cuenta creada de manera exitosa :D');
            }
        }
        return view('login');
            
    }
    

    public function create(){
        if(Auth::check()){
            return view('ua.userup');
        }
        return view('login');
        
    }
    
    public function show(){
        $user=Auth::user();

        $users=usuario::all()->whereNotIn('id', $user->id);
        return view('ua.userlist', compact('users'));
        //return $user;
    }

    public function edit(user $user){
        if(Auth::check()){
            $user=Auth::user();
            return view('ua.usermod', compact('user'));
        }
        return view('login');
        
    }

    public function update(registerequest $request, user $user){
        if(Auth::check()){
            $request->validated();

            $user->username = $request->username;
            $user->usuario_nombre = $request->usuario_nombre;
            $user->password = $request->password;

            $user->save();
            
            return redirect()->route('Home');
        }
        return view('login');
        
    }

    public function destroy(User $user){
        if(Auth::check()){
            $user->delete();
            return back()->with('success','El usuario se elimino con exito');
        }
        return view('login');
        
    }

}
