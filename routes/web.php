<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\userdatacontroller;
use App\Http\Controllers\categoriescontroller;
use App\Http\Controllers\uacontroller;
use App\Http\Controllers\productcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', home::class);


Route::controller(userdatacontroller::class)->group(function () {
    Route::get('/UA', 'index');
    Route::get('/UA/altausuario', 'create');
    Route::get('/UA/listausuario', 'show');
});

Route::controller(categoriescontroller::class)->group(function () {
    Route::get('/UA/altacategoria', 'create');
    Route::get('/UA/listacategoria', 'show');
});

Route::controller(uacontroller::class)->group(function(){
    Route::get('/UA/altaua', 'create');
    Route::get('/UA/listaua', 'show');
});

Route::controller(productcontroller::class)->group(function(){
    Route::get('/UA/altaproducto', 'create');
    Route::get('/UA/listaproducto', 'show');
});


