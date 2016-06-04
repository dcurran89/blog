@extends('layouts.master')

@section('head')

    <title>Blog Posts</title>

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Showing Post: #{{{ $post['id'] }}}</h1>
            <h3>{{{ $post['title'] }}}</h3>
            <p>{{{ $post['body'] }}}</p>
            <a class="btn btn-default" href="../posts/{{{ $post['id'] }}}/edit">Edit This Post!</a>
        </div>
    </div>
</div>
@stop