@extends('layouts.master')

@section('head')
    
    <title>Create Form</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
@section('content')

        <div class="form-group col-md-4 col-md-offset-4">  
        {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

          <br>

          <!-- title -->
          {{ Form::text('title', $post->title, 
              [
                'placeholder'   => 'Enter your post title',
                'value'         => "{{{ Input::old('title') }}}",
                'class'         => "form-control"
              ])
          }}
          {{ $errors->first('title', '<span class="">:message</span>') }}

          <br>
          <br>

          <!-- body -->
          {{ Form::textarea('body', $post->body, 
              [
                'placeholder'   => "Enter your post body",
                'value'         => "{{{ Input::old('body')}}}",
                'class'         => "form-control"
              ])
          }}
          {{ $errors->first('body', '<span class="">:message</span>') }}
          <br>
          <br>

          <!-- submit button -->
          <button type="submit" name="action" class="btn btn-submit">Submit Edit</button>
          <a class="btn btn-default" href="../../posts/{{{ $post['id'] }}}">Return to Post Without Saving Edit</a>

        {{ Form::close() }}
        </div>
@stop