<?php

namespace App\Http\Controllers;

use App\Models\ua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class uacontroller extends Controller
{
    public function store(Request $request){
        if(Auth::check()){
            $ua= new ua();

            $ua->ua_nombre = $request->ua_nombre;
            $ua->ua_ubicacion =$request->ua_ubicacion;
            $ua->ua_encargado =$request->ua_encargado;

            $ua->save();

            return redirect()->route('ua.show');
        }
        return view('login');

        
    }


    public function create(){
        if(Auth::check()){
            return view('ua.uaup');
        }
        return view('login');
    }
        
    
    public function show(){
        $uas=ua::all();
        return view('ua.ualist', compact('uas'));
    }

    public function edit(ua $ua){
        if(Auth::check()){
            return view('ua.uaupdate', compact('ua'));
        }
        return view('login');
        
    }

    public function update (Request $request, ua $ua ){
       
        if(Auth::check()){
            $ua->ua_nombre = $request->ua_nombre;
            $ua->ua_ubicacion =$request->ua_ubicacion;
            $ua->ua_encargado =$request->ua_encargado;
    
            $ua->save();
    
            return redirect()->route('ua.show');
        }
        return view('login');
    }

    public function destroy(ua $ua){
        if(Auth::check()){
            $ua->delete();
            return back()->with('success','La unidad administrativa se elimino con exito');
        }
        return view('login');
        
    }

}
