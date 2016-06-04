@extends('layouts.master')

@section('head')

    <title>Whack-a-Mole</title>
    <link rel="stylesheet" type="text/css" href="/../css/whackamole.css">
    <script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script src="/../js/whackamole.js" type="text/javascript"></script>

@stop

@section('content')
    <!-- audio files -->
    <audio id="meetmole">
      <source src="/../audio/meetyourmole.mp3" type="audio/mpeg">
    </audio>
    <audio id="moley">
      <source src="/../audio/moley.mp3" type="audio/mpeg">
    </audio>
    <audio id="chop">
      <source src="/../audio/chopitup.mp3" type="audio/mpeg">
    </audio>
    <audio id="wink">
      <source src="/../audio/winkingmole.mp3" type="audio/mpeg">
    </audio>
    <audio id="laugh">
      <source src="/../audio/evilLaugh.mp3" type="audio/mpeg">
    </audio>
    <audio id="theme">
      <source src="/../audio/theme.mp3" type="audio/mpeg">
    </audio>
    <!-- end of audio files -->

    <div class="container">

        <h1 id="hidden_title">GAME OVER!</h1>
        <div id="secret_gif">
            <img src="/../img/drevil.gif">
        </div>
        <button class="col-md-offset-4" id="start">
            <p>START</p>
        </button>
        <div class="timer">
            <p id="timer">TIME LEFT: </p>
        </div>
        <div class="score">
            <p id="score">SCORE: 0</p>
        </div>
        <div id="row1" class="row col-md-offset-4">
            <div class="box col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="square">

                </div>
            </div>
            <div class="box col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="square">

                </div>
            </div>
            <div class="box col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="square">

                </div>
            </div>
        </div> 

        <div id="row2" class="row col-md-offset-4">
            <div class="box col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="square">

                </div>
            </div>
            <div class="box col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="square">

                </div>
            </div>
            <div class="box col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="square">

                </div>
            </div>
        </div>

        <div id="row3" class="row col-md-offset-4">
            <div class="box col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="square">

                </div>
            </div>
            <div class="box col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="square">

                </div>
            </div>
            <div class="box col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="square">

                </div>
            </div>
        </div>
        
    </div>

@stop