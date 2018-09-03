<?php

namespace App\Http\Controllers;

use App\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        $posts = $tag->posts;

        return view('blog.index', compact('posts'));
    }

}
