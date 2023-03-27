<?php

namespace App\Http\Controllers;

use App\Http\Requests\productrequest;
use App\Models\ua;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class productcontroller extends Controller
{
    public function store(productrequest $request){
        if(Auth::check()){
            $prov = $request->file('file');

            if( $prov == null ){
                $product = product::create($request->validated());

            return redirect('/UA/listaproducto');
            }
            $nombre= Str::random(3) . $request->file('file')->getClientOriginalName();

            $ruta= storage_path().'/app/public/imagenes/'.$nombre;

            Image::make($request->file('file'))
            ->resize(300,300,function($constraint) {
                $constraint->aspectRatio();
            })
            
            ->save($ruta);

            $request->validated();

            $product = new product();

            $product->nombre= $request->nombre;
            $product->stock= $request->stock;
            $product->unidades= $request->unidades;
            $product->foto= '/storage/Imagenes/' . $nombre;
            $product->ua_id= $request->ua_id;
            $product->cat_id= $request->cat_id;
            $product->fech_ingr= $request->fech_ingr;
            $product->fech_egr= $request->fech_egr;
            $product->observacion= $request->observacion;

            $product->save();

            return redirect()->route('product.show');
        }
        return view('login');
        



    }

    public function create(){
        if(Auth::check()){
            $uas=ua::all();
            $cat=category::all();
            return view('ua.productup', compact('uas','cat'));
        }
        return view('login');
        
    }

    public function show(){

        $products = product::with([ 'ua','category'])->where('Estado', 'Activo')->paginate(5);
        return view('ua.productlist', compact('products'));
    }

    public function showdown(){
        $products = product::with([ 'ua','category'])->where('Estado', 'Baja')->paginate(5);
        return view('ua.productlistdown', compact('products'));
    }

    public function edit(product $product){
        if(Auth::check()){
            $uas=ua::all();
            $cat=category::all();
            return view('ua.productmod',compact('product', 'uas', 'cat'));
        }
        return view('login');
        
    }

    public function update (productrequest $request, product $product){
        if(Auth::check()){
            $prov = $request->file('file');

            if( $prov == null ){
                $request->validated();

                $product->nombre= $request->nombre;
                $product->stock= $request->stock;
                $product->unidades= $request->unidades;
                $product->foto= $product->foto;
                $product->ua_id= $request->ua_id;
                $product->cat_id= $request->cat_id;
                $product->fech_ingr= $request->fech_ingr;
                $product->fech_egr= $request->fech_egr;
                $product->estado=$request->estado;
                $product->observacion= $request->observacion;

                $product->save();

            return redirect('/UA/listaproducto');
            }
            $nombre= Str::random(3) . $request->file('file')->getClientOriginalName();

            $ruta= storage_path().'/app/public/imagenes/'.$nombre;

            Image::make($request->file('file'))
            ->resize(1200,null,function($constraint) {
                $constraint->aspectRatio();
            })
            
            ->save($ruta);

            $request->validated();

            $product->nombre= $request->nombre;
            $product->stock= $request->stock;
            $product->unidades= $request->unidades;
            $product->foto= '/storage/Imagenes/' . $nombre;
            $product->ua_id= $request->ua_id;
            $product->cat_id= $request->cat_id;
            $product->fech_ingr= $request->fech_ingr;
            $product->fech_egr= $request->fech_egr;
            $product->estado=$request->estado;
            $product->observacion= $request->observacion;

            $product->save();

            return redirect()->route('product.show');
        }
        return view('login');
        


    }

    public function destroy (product $product){
        if(Auth::check()){
            $product->delete();

            return back()->with('success','El producto se elimino con exito');
        }
        return view('login');
        
    }

    public function filt_cat(){
        $categories=category::all();
        return view('ua.filtrocat',compact('categories'));
    }
    public function fetch_cat(category $category){ 
        //$catid=$category->id;
        $categories=category::all();
        $products = product::with(['ua','category'])->where('cat_id', $category->id)->where('Estado','Activo')->paginate(5);

        //return $catid;
        //return $products;
        return view('ua.filtrocatres', compact('products', 'categories'));
    }

    public function filt_ua(){
        $uas=ua::all();
        return view('ua.filtroua',compact('uas'));
    }

    public function fetch_ua(ua $ua){ 
        //$catid=$category->id;
        $uas=ua::all();
        $products = product::with(['ua','category'])->where('ua_id', $ua->id)->where('Estado','Activo')->paginate(5);
        //return $catid;
        //return $products;
        return view('ua.filtrouares', compact('products', 'uas'));
    }


}
