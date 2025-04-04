<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $subscribersToMail = $blog->subscribers->filter(fn($subscriber)=>$subscriber->id != auth()->id());

        $subscribersToMail->each(function($subscriber) use ($blog){
            Mail::to($subscriber->email)->queue(new SubscriberMail($blog));
        });

        return redirect('/blog/'.$blog->slug);
    }
}
