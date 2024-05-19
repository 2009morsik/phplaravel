<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UserController;
 
Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/info/server', [UserController::class, 'phpmyinfo'])->name('server');

Route::get('/info/client', [UserController::class, 'clientip']);

Route::get('/info/database', [UserController::class, 'dtb']);