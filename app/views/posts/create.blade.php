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
              
              <!-- had to add all of this to change file button text -->
              <!-- <label for="files"> <span class="btn btn-default">Select Image</span></label>
              <input style="visibility: hidden; position: absolute;" id="files" class="form-control"
                    type="file" name="files"> -->
              <input type="file" name="img">
              <br>
              <!-- submit button -->
              <button type="submit" name="action" class="btn btn-submit">Submit</button>

            {{ Form::close() }}

          </div>
        </div>
        @else
          <h1>Please Log In to Create a Post</h1>
        @endif
@stop

