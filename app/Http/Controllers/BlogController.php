<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog.index', [
            'blogs' => Blog::latest()
                            ->filter(request(['search','category','user']))
                            ->paginate(6)
                            ->withQueryString()
        ]);
    }

    public function show(Blog $blog) {
        return view('blog.show', [
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->limit(3)->get()
        ]);
    }
}
