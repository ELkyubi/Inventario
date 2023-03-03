<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

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
        return view('ua.catup');
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
