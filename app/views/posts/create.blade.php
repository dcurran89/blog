@extends('layouts.master')

@section('head')
    
    <title>Create Form</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
@stop

@section('content')
        @if(Auth::check())
        <div class="form-group col-md-6 col-md-offset-3 create-form">  
          <div class="post">
            {{ Form::open(array
                (
                'action'  => 'PostsController@store',
                'class'   => 'form-group',
                'files'   => true
                ))
            }}

              <br>

              <!-- title -->
              {{ Form::text('title', null, 
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
              {{ Form::textarea('body', null, 
                  [
                    'placeholder'   => "Enter your post body",
                    'value'         => "{{{ Input::old('body')}}}",
                    'class'         => "form-control"
                  ])
              }}
              {{ $errors->first('body', '<span class="">:message</span>') }}
              <br>
              <br>

              <input type="file" name="img">

              <!-- submit button -->
              <button type="submit" name="action" class="btn btn-submit">Submit</button>

            {{ Form::close() }}

          </div>
        </div>
        @else
          <h1>Please Log In to Create a Post</h1>
        @endif
@stop

