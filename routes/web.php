<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});






Route::get('/UA', function () {
    return view('ua.index');
});

Route::get('/UA/altausuario', function () {
    return view('ua.userup');
});

Route::get('/UA/bajausuario', function () {
    return view('ua.userdown');
});

Route::get('/UA/actusuario', function () {
    return view('ua.userupdate');
});

Route::get('/UA/listausuario', function () {
    return view('ua.userlist');
});

Route::get('/UA/altaua', function () {
    return view('ua.uaup');
});

Route::get('/UA/bajaua', function () {
    return view('ua.uadown');
});


Route::get('/UA/actuua', function () {
    return view('ua.uaupdate');
});

Route::get('/UA/listaua', function () {
    return view('ua.ualist');
});

Route::get('/UA/altacategoria', function () {
    return view('ua.catup');
});


Route::get('/UA/listacategoria', function () {
    return view('ua.catlist');
});

Route::get('/UA/altaproducto', function () {
    return view('ua.productup');
});

Route::get('/UA/listaproducto', function () {
    return view('ua.productlist');
});


