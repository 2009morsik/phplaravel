<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UserController;
 
Route::get('/info/server', [UserController::class, 'phpmyinfo'])->name('server');

Route::get('/info/client', [UserController::class, 'clientip']);

Route::get('/info/database', [UserController::class, 'dtb']);

Route::post('/api/auth/login', 'App\Http\Controllers\Auth\RegisterController@login');
Route::post('/api/auth/register', 'App\Http\Controllers\Auth\RegisterController@create');
Route::post('/api/auth/out', 'App\Http\Controllers\Auth\RegisterController@out');
Route::post('/api/auth/out_all', 'App\Http\Controllers\Auth\RegisterController@out_all');


Route::post('/register', [RegisterController::class, 'store']);