<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsuariosController;

Route::get('', [HomeController::class,'index'])->name('admin.index');
route::resource('admin/Usuarios', UserController::class)->names('admin.usuarios');

