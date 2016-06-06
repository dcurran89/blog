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
                <p><small> Posted On: {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }} </small></p>
                <p><small> Updated: {{ $post->updated_at->setTimezone('America/Chicago')->diffForHumans() }} </small></p>
                <p>{{{ $post->body }}}</p>

            @endforeach
            
            {{ $posts->links() }}
        </div>
    </div>
</div>
@stop