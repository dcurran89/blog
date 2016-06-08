<?php
// var_dump($post);
?>
@extends('layouts.master')

@section('head')

    <title>Blog Posts</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css">

@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="post">
                @unless(empty($post['img_path']))
                    <img class="img_resize" src="{{{$post['img_path']}}}">
                @endunless
                <h2>Post: #{{{ $post['id'] }}}</h2>
                <h3>{{{ $post['title'] }}}</h3>
                <p>{{{ $post['body'] }}}</p>
            </div>
            <div class="">
                <a class="btn btn-default" href="../posts/{{{ $post['id'] }}}/edit">Edit This Post!</a>
                {{ Form::open([
                    'method' => 'DELETE',
                    'route' => ['posts.destroy', $post->id]
                    ]) 
                }}
                {{ Form::submit('Delete This Post', ['class' => 'btn btn-danger delete_post'])}}
                    

                    
                {{ Form::close()}}

            </div>
        </div>
    </div>
</div>

@stop