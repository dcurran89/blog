
@extends('layouts.master')

@section('head')

    <title>Log In</title>

@stop

@section('content')
    
    <div class="form-group col-md-6 col-md-offset-3 create-form">
        <div class="welcome">
            <h1>WELCOME TO THE BLOG</h1>
            <h2>Please Sign In Below</h2>
        </div>
          <div class="post">
            {{ Form::open(array
                (
                'action' => 'HomeController@doLogin',
                'class'  => 'form-group'
                ))
            }}

              <br>

              <!-- username -->
              {{ Form::text('username', null, 
                  [
                    'placeholder'   => 'Username',
                    'value'         => "{{{ Input::old('username') }}}",
                    'class'         => "form-control"
                  ])
              }}
              {{ $errors->first('username', '<span class="">:message</span>') }}

              <br>
              <br>

              <!-- password -->
              {{ Form::password('password', 
                  [
                    'placeholder'   => "Password",
                    'value'         => "{{{ Input::old('password')}}}",
                    'class'         => "form-control"
                  ])
              }}
              {{ $errors->first('password', '<span class="">:message</span>') }}
              <br>
              <br>

              <!-- submit button -->
              <button type="submit" class="btn btn-default">Login</button>

            {{ Form::close() }}
          </div>
        </div>

@stop