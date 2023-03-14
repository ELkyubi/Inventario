<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoriescontroller extends Controller
{   
    public function store(Request $request){
        $category= new category();

        $category->categoria_nombre = $request->categoria_nombre;
        $category->categoria_descripcion =$request->categoria_descripcion;

        $category->save();

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

    public function update(Request $request, category $category){
        $category->categoria_nombre = $request->categoria_nombre;
        $category->categoria_descripcion =$request->categoria_descripcion;

        $category->save();

        return redirect()->route('cat.show');
    }

}
