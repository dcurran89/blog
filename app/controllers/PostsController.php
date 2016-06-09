<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		// $this->beforeFilter('auth', array(
		// 	'except' => array(
		// 		'index', 
		// 		'show'
		// 		)
		// 	));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::check()){
		$posts = Post::paginate(4);
		// $posts = Post::where('user_id','=', Auth::id())->orderBy('title')->paginate(4);
    	$postsOrder = Post::orderBy('id', 'DESC')->get();

        // var_dump(Session::all());

		return View::make('posts.index')->with(array('posts' => $posts, 'postsOrder' => $postsOrder));
		}else{
		$posts = Post::paginate(4);
    	$postsOrder = Post::orderBy('id', 'DESC')->get();

        // var_dump(Session::all());

		return View::make('posts.index')->with(array('posts' => $posts, 'postsOrder' => $postsOrder));
		}

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->user_id = Auth::id();

		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
        	Session::flash('errorMessage', 'Stupid User! Do things mas better!');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
			    if(Input::hasFile('img')) {
			    	$img = Input::file('img');
			    	$imgName = $img->getClientOriginalName();
			    	$systemPath = public_path() . '/uploads';
			    	$img->move($systemPath, $imgName);
			    	$post->img_path = '/uploads/' . $imgName;
			    }
	        if($post->save()) {
			    Session::flash('successMessage', 'Post has been saved!');
				return Redirect::action('PostsController@show', $post->id);
			} else {
				//*************************************************************
				//If this error message shows something really bad happened
				//e.g. database disconnect
				//*************************************************************
	        	Session::flash('errorMessage', 'Something very bad happened');
				return Redirect::back()->withInput();
			}
	    }


		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with(['post' => $post]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with(['post' => $post]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
	        $post = Post::find($id);
			$post->title = Input::get('title');
			$post->body = Input::get('body');
        	if(Input::hasFile('img')) {
        		// dd('you have an image');
		    	$img = Input::file('img');
		    	$imgName = $post->id . '.' . $img->getClientOriginalExtension();
		    	$systemPath = public_path() . '/uploads';
		    	$img->move($systemPath, $imgName);
		    	$post->img_path = '/uploads/' . $imgName;
		    }
			if($post->save()) {
			    Session::flash('successMessage', 'Post has been updated!');
				return Redirect::action('PostsController@show', $post->id);
			} else {
				return Redirect::back()->withInput();
			}
	    }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		Session::flash('successMessage', 'Post has been deleted!');
		return Redirect::action('PostsController@index');
	}


}
