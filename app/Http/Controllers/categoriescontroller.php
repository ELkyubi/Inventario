<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoriesrequest;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoriescontroller extends Controller
{   
    public function store(categoriesrequest $request){

        $category= category::create($request->validated());

       // $category->categoria_nombre = $request->categoria_nombre;
        //$category->categoria_descripcion =$request->categoria_descripcion;

        //$category->save();
        return redirect()->route('cat.show');
    }

    public function create(){
        if(Auth::check()){
            return view('ua.catup');
        }
        return redirect('/UA');
       
    }

    public function show(){
        $categories=category::all();
        return view('ua.catlist', compact('categories'));
    }

    public function edit(category $category){
    
        return view('ua.catmod', compact('category'));
    }

    public function update(categoriesrequest $request, category $category){

        $request->validated();

        $category->categoria_nombre = $request->categoria_nombre;
        $category->categoria_descripcion =$request->categoria_descripcion;

        
        $category->save();

        return redirect()->route('cat.show');
    }
    public function destroy(category $category){
        $category->delete();
        return back()->with('success','La categoria se elimino con exito');
    }

}
