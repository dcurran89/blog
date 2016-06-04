<?php

// ***************************************************************************
// Routing code for Roll Dice Exercise 10.2.2
// Logic never goes in the view, however I put it here so when we take out
// the logic from routes.php I have a reference to this exercise.
// ***************************************************************************

// Route::get('/rolldice/{guess}', function($guess){
//     $number = mt_rand(1,6);
//     if($guess == $number){
//         $message = 'You da man!';
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
//     return View::make('roll-dice')->with($data);
// });

?>
<!DOCTYPE html>
<html>
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h3>Your Guess: {{{ $guess }}} </h3>
    <h3>Random Number: {{{ $number }}} </h3>
    <h3> {{{ $message }}} </h3>
</body>
</html>

