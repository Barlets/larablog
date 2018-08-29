@extends('blog.layouts.master')

@section('content')
    <div class="col-md-8 blog-main">

        <h1>{{ $post->title }}</h1>

        <p>
            {{ $post->body }}
        </p>

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}} :
                        </strong>
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr>

        {{--Add a comment--}}
        <div class="card">
            <div class="card-block">

                <form method="post" action="/posts/{{$post->id}}/comments">

                    <div class="form-group">
                        {{csrf_field()}}
                        <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>

                </form>

            </div>
        </div>
        @include('blog.layouts.errors')
    </div>

@endsection