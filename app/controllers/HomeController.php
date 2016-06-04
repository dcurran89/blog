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

	public function rollDice($guess = 1){

	    $number = mt_rand(1,6);

	    if($guess == $number){
	        $message = 'You da man and/or woman, good guess!';
	    } else {
	        $message = 'You suck, try again!';
	    }

	    $data = array(
	        'guess' => $guess,
	        'number' => $number,
	        'message' => $message
	        );
	    // var_dump($data);
	    // dd($data); 
	    // dd means var_dump and die, 
	    return View::make('games.roll-dice')->with($data);

	}
	
	public function sayHello($name = 'Daniel')
	{
	    if($name == 'Chris'){
	        return Redirect::to('/');
	    } else {
	        $data = array('name' => $name);
	        return View::make('my-first-view')->with($data);
	    }
	}

}
