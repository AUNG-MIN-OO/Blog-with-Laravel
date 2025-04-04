<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function subscriptionHandler(Blog $blog){
        if (User::find(auth()->id())->isSubscribedBlog($blog)){
            $blog->unSubscribe();
        }else{
            $blog->subscribe();
        }

        return redirect()->back();
    }

    public function create(){
        return view('blog.create',[
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request){

        $formData = $request->validate([
            "title" => ["required"],
            "intro" => ["required"],
            "slug" => ["required", Rule::unique('blogs','slug')],
            "category_id" => ["required", Rule::exists('categories','id')],
            "body" => ["required"]
        ]);

        $formData['user_id'] = auth()->id();
        $formData['thumbnail'] = $request->file('thumbnail')->store('thumbnails');

        Blog::create($formData); //add blog data into database

        return redirect()->back()->with('success', 'New blog successfully created');
    }
}
