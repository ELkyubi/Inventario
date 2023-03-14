<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\home;
use App\Http\Controllers\userdatacontroller;
use App\Http\Controllers\categoriescontroller;
use App\Http\Controllers\uacontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\login_con;
use App\Http\Controllers\logot_con;

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
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [login_con::class, 'show']);
Route::post('/', [login_con::class, 'login'])->name('home.login');
Route::get('/logout', [logot_con::class, 'logout'])->name('home.logout');

Route::controller(userdatacontroller::class)->group(function () {
    //Route::get('/', home::class);
    //Route::post('/login','auth')->name('login.auth');
    Route::get('/UA', 'index');
    Route::get('/UA/altausuario', 'create');
    Route::get('/UA/listausuario', 'show');
    Route::post('/UA/altausuario', 'register')->name('usuarios.register') ;
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




