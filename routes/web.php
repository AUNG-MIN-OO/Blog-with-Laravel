<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);

Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->where('blog', '[A-z\d\-_]+');

Route::get('/register', [AuthController::class, 'create']);
Route::post('/register', [AuthController::class, 'store']);
