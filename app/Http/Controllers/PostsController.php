<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    
    public function index()
    {
        $posts = Post::latest()->Filter(request(['month', 'year']))->get();

        return view('posts.index', compact('posts'));
    }



    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }



    public function create()
    {
        return view('posts.create');
    }



    public function store()
    {
        // title and body are directly stored 
        // because we let them be mass assigned in the Post model
        $this->validate(request(), [
            'title' => 'required|min:3',
            'body' => 'required|max:1000'
        ]);

        auth()->user()->publish_a_Post(new Post(request(['title', 'body'])));

        return redirect()->home();

    }
}
