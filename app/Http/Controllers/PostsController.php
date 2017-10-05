<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('posts.index',compact('posts'));

    }

    public function show(Post $post) 
    {
    	return view('posts.show',compact('post'));

    }


     public function create() 
    {
    	return view('posts.create');

    }  

    public function store() 
    {
    	// $post = new Post;
    	// $post->title=request('title');
    	// $post->body=request('body');
    	// $post->save();
    	// OR

    	Post::create(request(['title', 'body']));
    	return redirect('/');

    }
}
