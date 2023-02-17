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
    return view('welcome');
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

