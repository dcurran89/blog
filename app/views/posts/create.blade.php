@extends('layouts.master')

@section('head')
    
    <title>Create Form</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
@stop

@section('content')

        <div class="form-group col-md-4 create-form">  
        {{ Form::open(array
            (
            'action' => 'PostsController@store',
            'class'  => 'form-group'
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
          {{ Form::text('body', null, 
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
          <button type="submit" name="action" class="btn btn-submit">Submit</button>

        {{ Form::close() }}
        </div>
@stop

