<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);

Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->where('blog', '[A-z\d\-_]+');

Route::get('/category/{category:slug}', function (Category $category) {
    return view('blogs', [
        'blogs' => $category->blogs,
        'categories' => Category::all(),
        'currentCategory' => $category,
    ]);
});

Route::get('/user/{user:username}', function (User $user) {
    return view('blogs', [
        'blogs' => $user->blogs
    ]);
});
