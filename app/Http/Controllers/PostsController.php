<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show(/*Post $post*/)
    {
        return view('posts.show'/*, compact($post)*/);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
//        $post = new Post();
//        $post->title = request('title');
//        $post->body = request('body');
//        $post->save();

//        Post::create(request()->all());

//        Post::create([
//            'title' => request('title'),
//            'body' => request('body')
//        ]);

        Post::create(request(['title', 'body']));

        return redirect('/');
    }

}
