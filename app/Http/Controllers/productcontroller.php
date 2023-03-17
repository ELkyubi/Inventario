<?php

namespace App\Http\Controllers;

use App\Models\ua;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class productcontroller extends Controller
{
    public function store(Request $request){
        
        $prov = $request->file('file');

        if( $prov == null ){
            $product = new product();

        $product->nombre= $request->nombre;
        $product->stock= $request->stock;
        $product->unidades= $request->unidades;
        $product->ua_id= $request->ua_id;
        $product->cat_id= $request->cat_id;
        $product->fech_ingr= $request->fech_ingr;
        $product->fech_egr= $request->fech_egr;
        $product->observacion= $request->observacion;

        $product->save();

        return $product;
        }
        $nombre= Str::random(3) . $request->file('file')->getClientOriginalName();

        $ruta= storage_path().'/app/public/imagenes/'.$nombre;

        Image::make($request->file('file'))
        ->resize(1200,null,function($constraint) {
            $constraint->aspectRatio();
        })
        
        ->save($ruta);

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

        return $product;




    }

    public function create(){
        $uas=ua::all();
        $cat=category::all();
        return view('ua.productup', compact('uas','cat'));
    }

    public function show(){

        $products = product::with([ 'ua','category'])->paginate(10);
        return view('ua.productlist', compact('products'));
    }

    public function filt_cat(){
        $categories=category::all();
        return view('ua.filtrocat',compact('categories'));
    }
    public function fetch_cat(category $category){ 
        //$catid=$category->id;
        $categories=category::all();
        $products = product::with(['ua','category'])->where('cat_id', $category->id)->get();
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
        $products = product::with(['ua','category'])->where('ua_id', $ua->id)->get();
        //return $catid;
        //return $products;
        return view('ua.filtrouares', compact('products', 'uas'));
    }

}
