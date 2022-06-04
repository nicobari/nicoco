<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CajaController;
use App\Http\auth\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('servicios', App\Http\Controllers\servicioController::class);
Route::resource('cajas', App\Http\Controllers\CajaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/caja', [App\Http\Controllers\CajaController::class, 'caja'])->name('caja');
Route::get('/register', [CajaController::class, 'register']);
