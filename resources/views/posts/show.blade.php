@extends('blog.layouts.master')

@section('content')
    <div class="col-md-8 blog-main">

        <h1>{{ $post->title }}</h1>

        <p>
            {{ $post->body }}
        </p>

    </div>
@endsection