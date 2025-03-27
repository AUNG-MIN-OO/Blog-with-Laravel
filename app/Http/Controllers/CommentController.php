<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $blog){
        request()->validate([
            'comment_body' => 'required',
        ],[
            'comment_body.required' => 'Please write comment!',
        ]);

        $blog->comments()->create([
            'body' => request('comment_body'),
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
