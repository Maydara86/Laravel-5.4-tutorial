<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        // Because we have a relation betwen the post and the comment through the comments() methode above,
        // we can use comments()-create() and the post_id will be added automaticly  
        $this->comments()->create(compact('body'));
    }
}
