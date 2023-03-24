<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\ua;
use Barryvdh\DomPDF\Facade\Pdf;

class pdfcontroler extends Controller
{
      public function index(){
        $uas=ua::all();
        $cat=category::all();
        return view('pdf.index', compact('uas', 'cat'));
      }

      public function pdfcat(request $request){
        $products= product::with(['ua','category'])->where('cat_id', $request->cat_id)->get();
        $category=category::where('id', $request->cat_id)->get();
        $pdf= Pdf::loadView('pdf.categoria', compact('products', 'category'));
       
        return $pdf->stream();
      }

      public function pdfua(Request $request){
        $products= product::with(['ua','category'])->where('ua_id', $request->ua_id)->get();
        $ua=ua::where('id', $request->ua_id)->get();
        $pdf= Pdf::loadView('pdf.ua', compact('products', 'ua'));
       
        
        return $pdf->stream();
      }

      public function general(){

      }

      public function pdfingr(){

      }
}
