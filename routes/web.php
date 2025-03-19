<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
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
    $blogs = Blog::latest();

    if (request('search')) {
        $blogs = $blogs->where('title', 'like', '%' . request('search') . '%');
    }

    return view('blogs', [
        'blogs' => $blogs->get(),
        'categories' => Category::all()
    ]);
});

Route::get('/blog/{blog:slug}', function (Blog $blog) {
    return view('blog', [
        'blog' => $blog,
        'randomBlogs' => Blog::inRandomOrder()->limit(3)->get()
    ]);
})->where('blog', '[A-z\d\-_]+');

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
