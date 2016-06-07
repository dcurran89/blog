@extends('layouts.master')

@section('head')

    <title>Blog Posts</title>

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">           
            @foreach($posts as $post)
                <div class="post">
                    <!-- links to each show page -->
                    <a href="../posts/{{{ $post->id }}}">
                        <h3 id="title" class="title">{{{ $post->title }}}</h3>
                    </a>
                    <p class="postedOn"><small> Posted On: {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }} by {{{ $post->user->username }}}</small></p>
                    <p class="updatedOn"><small> Updated: {{ $post->updated_at->setTimezone('America/Chicago')->diffForHumans() }} </small></p>
                    <p>{{{ $post->body }}}</p>
                </div>
            @endforeach
            
            {{ $posts->links() }}
        </div>
    </div>
</div>
@stop