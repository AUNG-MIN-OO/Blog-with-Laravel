<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $blogs = Blog::all();
    return view('blogs',[
        'blogs' => $blogs
    ]);
});

Route::get('/blog/{blog}', function (Blog $blog){
    return view('blog',[
        'blog' => $blog
    ]);
})->where('blog','[A-z\d\-_]+');
