<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
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

        $this->validate(request(), [
            'title' => 'required|min:5',
            'body' => 'required',
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        session()->flash('message', 'You post has now been published');

        return redirect('/');
    }

}
