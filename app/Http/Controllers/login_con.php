<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\loginrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login_con extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/UA');
        }
        return view('login');
    }
    

    public function login(loginrequest $request){
        $credentials = $request->getCredentials();
         if (!Auth::validate($credentials)):
            return redirect()->to('/')->withErrors('Autentificación fallida');
         endif;

         $user = Auth::getProvider()->retrieveByCredentials($credentials);

         Auth::login($user);

         return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user){
        
        return redirect('/UA');
    }


}
