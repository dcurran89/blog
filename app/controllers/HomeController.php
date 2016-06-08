<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showSimpleSimba()
	{
	    return View::make('simpleSimba');
	}

	public function showWhackamole()
	{
	    return View::make('whackamole');
	}

	public function resume()
	{
	    return View::make('resume');
	}

	public function portfolio()
	{
	    return View::make('portfolio');
	}
	//GET
	public function login()
	{
		// Show form with 2 fields for submitting/logging in
		return View::make('login');
	}
	//POST
	public function doLogin()
	{

		//Grab all Inputs
		$credentials = [
            'username'	=>Input::get('username'),
            'password'	=>Input::get('password')
        ];
        var_dump($credentials);
        // dd(Session::all());
		// Validate Input Fields
		// create the validator
	    $validator = Validator::make(Input::all(), User::$loginRules);//make rules

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
        	Session::flash('errorMessage', 'Stupid User! Do things mas better!');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	    	//Attempt Login
			if (Auth::attempt($credentials)) {
				Session::flash('successMessage', "Welcome {$credentials['username']}");
			    return Redirect::to('/posts');
			} else {
			    // login failed, go back to the login screen
			    Session::flash('errorMessage', 'Credentials Are Incorrect');
			    return Redirect::back()->withInput()->withErrors($validator);
			}
	    }
		
	}

	public function doLogout()
	{
		Session::flash('successMessage', "You've been Logged Out");
		Auth::logout();
		return Redirect::to('/login');
	}

	// TEST EXERCISES
	// public function rollDice($guess = 1){

	//     $number = mt_rand(1,6);

	//     if($guess == $number){
	//         $message = 'You da man and/or woman, good guess!';
	//     } else {
	//         $message = 'You suck, try again!';
	//     }

	//     $data = array(
	//         'guess' => $guess,
	//         'number' => $number,
	//         'message' => $message
	//         );
	//     // var_dump($data);
	//     // dd($data); 
	//     // dd means var_dump and die, 
	//     return View::make('games.roll-dice')->with($data);

	// }
	
	// public function sayHello($name = 'Daniel')
	// {
	//     if($name == 'Chris'){
	//         return Redirect::to('/');
	//     } else {
	//         $data = array('name' => $name);
	//         return View::make('my-first-view')->with($data);
	//     }
	// }

}
