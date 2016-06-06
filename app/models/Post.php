<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    public static $rules = array
    (
        'title' => 'required|max:100',
        'body' => 'required|max:1000'
    );

    // $posts = Post::orderBy('id', 'DESC')->get();
}

?>