<?php

use App\Http\Controllers\facturacionController;
use App\Http\Controllers\productocontroller;
use App\Http\Controllers\reportedeventasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('InicioVF');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin,index');
    })->name('admin');
});

Route::middleware(['auth:sanctum','verified'])->group(function(){

    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');

    Route::resource('facturacion',facturacionController::class)->names('facturacion');
    Route::resource('reportedeventas', reportedeventasController::class)->names('reportedeventas');
    Route::resource('producto', productocontroller::class)->names('producto');



});
