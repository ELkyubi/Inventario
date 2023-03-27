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

      public function pdfgeneral(){

        $products= product::with(['ua','category'])->where('Estado','Activo')->get();
        $pdf=Pdf::loadView('pdf.general', compact('products'));

        return $pdf->stream();

      }

      public function pdfbajas(){
        $products=product::with(['ua','category'])->where('Estado','Baja')->get();
        $pdf=pdf::loadView('pdf.baja', compact('products'));

        return $pdf->stream();
      }

      public function pdfingr(Request $request){
        $from=$request->from1;
        $to=$request->to1;
        $products=product::with(['ua','category'])->whereBetween('fech_ingr',[$request->from1, $request->to1])->get();
        $pdf=Pdf::loadView('pdf.ingr', compact('products', 'from', 'to'));

        return $pdf->stream();
      }

      public function pdfegr(Request $request){
        $from=$request->from2;
        $to=$request->to2;
        $products=product::with(['ua','category'])->whereBetween('fech_egr',[$request->from2, $request->to2])->get();
        $pdf=Pdf::loadView('pdf.egr', compact('products', 'from', 'to'));

        return $pdf->stream();
      }
}
