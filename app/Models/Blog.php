<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{

    public $title;
    public $slug;
    public $intro;
    public $body;

    public function __construct($title, $slug, $intro, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->intro = $intro;
        $this->body = $body;
    }

    public static function all()
    {
        $files = File::files(resource_path("blogs"));

        $blogs = array_map(function($gg){
            $file = YamlFrontMatter::parse(file_get_contents($gg));
            return $blog = new Blog($file->title, $file-> slug, $file->intro, $file->body());
        },$files);

        return $blogs;

//        $allBlogs = array_map(function ($file){
//            return $file->getContents();
//        }, $files);
//        return $allBlogs;
//        dd($files);
    }

    public static function find($slug)
    {
        $path = resource_path("/blogs/$slug.html");
        if (!file_exists($path)){
            return redirect('/');
        }

        $blog = cache()->remember("posts.$slug", now()->addMinute(2), function () use ($path){
            return file_get_contents($path);
        });

        return $blog;
    }
}
