<?php

namespace App\Http\Controllers;

use App\Models\ua;
use Illuminate\Http\Request;

class uacontroller extends Controller
{
    public function store(Request $request){
        

        $ua= new ua();

        $ua->ua_nombre = $request->ua_nombre;
        $ua->ua_ubicacion =$request->ua_ubicacion;
        $ua->ua_encargado =$request->ua_encargado;

        $ua->save();

        return redirect()->route('ua.show');
    }


    public function create(){
        return view('ua.uaup');
    }

    public function show(){
        $uas=ua::all();
        return view('ua.ualist', compact('uas'));
    }

    public function edit(ua $ua){
        return view('ua.uaupdate', compact('ua'));
    }

    public function update (Request $request, ua $ua ){
        $ua->ua_nombre = $request->ua_nombre;
        $ua->ua_ubicacion =$request->ua_ubicacion;
        $ua->ua_encargado =$request->ua_encargado;

        $ua->save();

        return redirect()->route('ua.show');
    }

}
