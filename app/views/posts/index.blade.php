
@extends('layouts.master')

@section('head')

    <title>Blog Posts</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css">

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">           
            @foreach($posts as $post)
                <div class="post">
                    <!-- links to each show page -->
                    @unless(empty($post->img_path))
                        <a href="../posts/{{{ $post->id }}}"><img class="img_resize" src="{{{$post->img_path}}}"></a>
                    @endunless
                    <h2 class="title">
                        <a id="title" class="title" href="../posts/{{{ $post->id }}}">{{{ $post->title }}}</a>
                    </h2>
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