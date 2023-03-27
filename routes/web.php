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
use App\Http\Controllers\pdfcontroler;

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
    Route::get('/UA', 'index')->name('Home');
    Route::get('/UA/modificarusuario/{user}', 'edit')->name('user.edit');
    Route::get('/UA/altausuario', 'create');
    Route::get('/UA/listausuario', 'show');
    Route::delete('/UA/listausuario/{user}', 'destroy')->name('user.delete');
    Route::put('/UA/modificarusuario/{user}', 'update')->name('user.update');
    Route::post('/UA/altausuario', 'register')->name('usuarios.register') ;
    
    
});

Route::controller(categoriescontroller::class)->group(function () {
    Route::get('/UA/altacategoria', 'create');
    Route::get('/UA/listacategoria', 'show')->name('cat.show');
    Route::get('/UA/listacategoria/{category}/edit', 'edit')->name('cat.edit');
    Route::delete('/UA/listacategoria/{category}', 'destroy')->name('cat.delete');
    Route::post('/UA/altacategoria', 'store')->name('cat.store') ;
    Route::put('/UA/listacategoria/{category}/edit', 'update')->name('cat.update');
});

Route::controller(uacontroller::class)->group(function(){
    Route::get('/UA/altaua', 'create');
    Route::get('/UA/listaua', 'show')->name('ua.show');
    Route::get('/UA/listaua/{ua}/edit', 'edit')->name('ua.edit');
    Route::post('/UA/altaua', 'store')->name('ua.store') ;
    Route::put('/UA/listaua/{ua}/edit', 'update')->name('ua.update');
    Route::delete('/UA/listaua/{ua}', 'destroy')->name('ua.delete');
});

Route::controller(productcontroller::class)->group(function(){
    Route::get('/UA/altaproducto', 'create');
    Route::get('/UA/listaproducto', 'show')->name('product.show');
    Route::get('/UA/listaproductobajas', 'showdown')->name('product.showdown');
    Route::post('/UA/altaproducto', 'store')->name('product.store');
    Route::put('/UA/listaproducto', 'down')->name('product.down');
    Route::delete('/UA/listaproductobajas/{product}', 'destroy')->name('product.delete');
    Route::get('/UA/listaproducto/{product}/edit', 'edit')->name('product.edit');
    Route::put('/UA/listaproducto/{product}/edit', 'update')->name('product.update');
    Route::get('/UA/filtrocategoria','filt_cat');
    Route::get('/UA/filtrocategoria/{category}','fetch_cat')->name('product.fetch');
    Route::get('/UA/filtroua','filt_ua');
    Route::get('/UA/filtroua/{ua}','fetch_ua');

});

Route::controller(pdfcontroler::class)->group(function(){
    Route::post('/UA/reportes', 'pdfcat')->name('pdf.cat');
    Route::get('/UA/reportes', 'index'); 
    Route::post('/UA/reportes/ua', 'pdfua')->name('pdf.ua');
    Route::post('/UA/reportes/ingr', 'pdfingr')->name('pdf.ingr');
    Route::post('/UA/reportes/egr', 'pdfegr')->name('pdf.egr');
    Route::post('/UA/reportes/bajas', 'pdfbajas')->name('pdf.bajas');
    Route::post('/UA/reportes/general', 'pdfgeneral')->name('pdf.general');
    
});




