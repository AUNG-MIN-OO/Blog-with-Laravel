<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{

    public $title;
    public $slug;
    public $intro;
    public $body;
    public $date;

    public function __construct($title, $slug, $intro, $body, $date)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->intro = $intro;
        $this->body = $body;
        $this->date = $date;
    }

    public static function all()
    {
        return collect(File::files(resource_path("blogs")))
            ->map(function ($file){
            $file = YamlFrontMatter::parse(file_get_contents($file));
            return new Blog($file->title, $file-> slug, $file->intro, $file->body(), $file->date);
        })->sortByDesc('date');
    }

    public static function find($slug)
    {
        $blogs = static::all();
        return $blogs->firstWhere('slug', $slug);
    }

    public static function findOrFail($slug)
    {
        $blog = static::find($slug);
        if (!$blog){
            throw new ModelNotFoundException();
        }
        return $blog;
    }
}
