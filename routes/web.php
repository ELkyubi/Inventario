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
    Route::post('/UA/altausuario', 'store')->name('usuarios.store') ;
});

Route::controller(categoriescontroller::class)->group(function () {
    Route::get('/UA/altacategoria', 'create');
    Route::get('/UA/listacategoria', 'show')->name('cat.show');
    Route::get('/UA/listacategoria/{category}/edit', 'edit')->name('cat.edit');
    Route::post('/UA/altacategoria', 'store')->name('cat.store') ;
    Route::put('/UA/listacategoria/{category}/edit', 'update')->name('cat.update');
});

Route::controller(uacontroller::class)->group(function(){
    Route::get('/UA/altaua', 'create');
    Route::get('/UA/listaua', 'show')->name('ua.show');
    Route::get('/UA/listaua/{ua}/edit', 'edit')->name('ua.edit');
    Route::post('/UA/altaua', 'store')->name('ua.store') ;
    Route::put('/UA/listaua/{ua}/edit', 'update')->name('ua.update');
});

Route::controller(productcontroller::class)->group(function(){
    Route::get('/UA/altaproducto', 'create');
    Route::get('/UA/listaproducto', 'show');
});


