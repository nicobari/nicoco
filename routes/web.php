<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CajaController;
use App\Http\auth\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

?>
