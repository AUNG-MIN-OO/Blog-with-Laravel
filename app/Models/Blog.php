<?php

namespace App\Models;

use http\Client\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $with = ['category','user'];

    public function scopeFilter($query, $filter)
    {
        $query->when($filter['search']??false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filter['category']??false, function ($query, $category_slug ) {
            $query->whereHas('category', function ($query) use ($category_slug) {
                $query->where('slug', $category_slug);
            });
        });

        $query->when($filter['user']??false, function ($query, $username) {
            $query->whereHas('user',function ($query) use ($username){
                $query->where('username', 'like', '%' . $username . '%');
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function subscribers(){
        return $this->belongsToMany(User::class);
    }
}
