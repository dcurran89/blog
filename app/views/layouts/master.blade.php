<!DOCTYPE html>
<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">

    @yield('head')

    
</head>
<body>
    <nav class="navbar navbar-default navbar navbar-inverse">
        <div class="form-group signinbut">
            <a href="/users/logout" type="submit" class="btn btn-default navbut">Log Out</a>
        </div>
        <div class="form-group signinbut">
            <a href="/users/login" type="submit" class="btn btn-default navbut">Log In</a>
        </div>
        <div class="form-group signinbut">
            <a href="" class="btn btn-default navbut">Link to Resume?</a>
        </div>

        <div class="form-group signinbut">
            <a href="" class="btn btn-default navbut">Link to Projects?</a>
        </div>

        <div class="logo">
            <a href="/posts" type="submit" class="nav-home">Daniel's Blog</a>
        </div>
    </nav>
    <main class="">
    
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif

        @yield('content')

    </main>

    <!-- Jquery CDN -->
    <script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
</body>
</html>