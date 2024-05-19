<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/info/server', [UserController::class, 'phpmyinfo'])->name('server');

Route::get('/info/client', [UserController::class, 'clientip']);

Route::get('/info/database', [UserController::class, 'dtb']);
