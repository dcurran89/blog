$(document).ready(function(){
    "use strict";

    var $squares = $('.square');
    var $start = $('#start');
    var $score = $('#score');
    var score = 0;
    var $timer = $('#timer');
    var $theme = $('#theme');
    var moleInterval = null;
    
    var myCounter = new countdown({  
        seconds: 30,  // number of seconds to count down
        onUpdateStatus: function(sec){
            $timer.html("TIME LEFT: " + sec);
        }, // callback for each second
        onCounterEnd: function(){} // final action
    });
    
    var random = function(){
        var randomSquare = Math.round(Math.random() * $squares.length);
        console.log("randomSquare is: " + randomSquare);
        return randomSquare;
    }
    
    function showMole() {
        var randomSquare = Math.round(Math.random() * $squares.length);
        $squares.removeClass("show");
        $squares.eq(randomSquare).addClass("show");
        console.log("random mole: " + random());
    }

    function gameOver(){
        $start.attr("disabled", false);
        clearInterval(moleInterval);
        $squares.removeClass("show");
        $start.fadeOut().delay(3000).fadeIn();
        $('.timer').fadeOut().delay(3000).fadeIn();
        $('.box').fadeOut().delay(3000).fadeIn();
        $('.score').fadeOut().delay(3000).fadeIn();
        $('#hidden_title').fadeIn().delay(3000).fadeOut();
        $('#secret_gif').slideDown().delay(3000).slideUp();
        $('#laugh').get(0).play();
    }


    function countdown(options) {
        var timer,
        instance = this,
        seconds = options.seconds,
        updateStatus = options.onUpdateStatus

        function decrementCounter() {
            updateStatus(seconds);
            if (seconds === 0) {
                gameOver();
                instance.stop();
            }
            seconds--;
        }
        this.start = function () {
            clearInterval(timer);
            timer = 0;
            seconds = options.seconds;
            timer = setInterval(decrementCounter, 1000);
        };
        this.stop = function () {
            clearInterval(timer);
        };
    }//end of countdown

    function audio (){
        if(score == 5){
            $('#moley').get(0).play();
        } else if (score == 10) {
            $('#chop').get(0).play();
        } else if (score == 15) {
            $('#wink').get(0).play();
        }
    }

    $squares.click(function(){
        $squares.removeClass("show");
        audio();
        score++;
        $score.html("SCORE: " + score);
        console.log("clicked random: " + random());
    });

    $start.click(function(){
        $(this).attr("disabled", true);
        $score.html('SCORE: 0');
        $('#meetmole').get(0).play();
        moleInterval = setInterval(showMole, 1000);
        myCounter.start();
    });
});