<?php

use App\Http\Controllers\BlogController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);

Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->where('blog', '[A-z\d\-_]+');

Route::get('/user/{user:username}', function (User $user) {
    return view('blogs', [
        'blogs' => $user->blogs
    ]);
});
