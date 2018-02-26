<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function addComment($body)
    {
        // Because we have a relation betwen the post and the comment through the comments() methode above,
        // we can use comments()-create() and the post_id will be added automaticly  
        $this->comments()->create(compact('body'));
    }



    public function store (Post $post)
    {
        //store a post when the user is loged in using the save method from Post model
        User::posts()->save($post);
    }



    public function scopeFilter($query, $filters)
    {
        if($month = $filters['month'])
        {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = $filters['year'])
        {
            $query->whereYear('created_at', $year);
        }
    }



    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year', 'month')->orderByRaw('min(created_at) desc')->get()->toArray();
    }
}
