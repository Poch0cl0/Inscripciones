<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', [UserController::class,'showLogin']);
Route::post('/identificacion', [UserController::class,'verificalogin'])->name('user.login');
Route::post('/logout', [UserController::class, 'salir'])->name('logout');

// RUTA PARA EL HOME
Route::get('/home', [HomeController::class,'index'])->name('home');