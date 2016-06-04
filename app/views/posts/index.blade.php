@extends('layouts.master')

@section('head')

    <title>Blog Posts</title>

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-5">           
            @foreach($posts as $post)
                <!-- links to each show page -->
                <a href="../posts/{{{ $post->id }}}">
                    <h3>{{{ $post->title }}}</h3>
                </a>
                <p>{{{ $post->body }}}</p>

            @endforeach
            
            {{ $posts->links() }}
        </div>
    </div>
</div>
@stop