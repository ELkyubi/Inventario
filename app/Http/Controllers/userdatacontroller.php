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
       
            $user=User::create($request->validated());
            if($user==null){
                return redirect('/UA/listausuario');
            }else{
                return redirect('/UA/listausuario')->with('success','Cuenta creada de manera exitosa :D');
            }
    }
    

    public function create(){
        return view('ua.userup');
    }
    
    public function show(){
        $user=Auth::user();

        $users=usuario::all()->whereNotIn('id', $user->id);
        return view('ua.userlist', compact('users'));
        //return $user;
    }

    public function edit(user $user){
        $user=Auth::user();
        return view('ua.usermod', compact('user'));
    }

    public function update(registerequest $request, user $user){

        $request->validated();

        $user->username = $request->username;
        $user->usuario_nombre = $request->usuario_nombre;
        $user->password = $request->password;

        $user->save();
        
        return redirect()->route('Home');
    }

    public function destroy(User $user){
        $user->delete();
        return back()->with('success','El usuario se elimino con exito');
    }

}
