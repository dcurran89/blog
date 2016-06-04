<!DOCTYPE html>
<html>
<head>
    <title>Simple Simon</title>
    <link rel="stylesheet" type="text/css" href="/css/simpleSimon.css">
    <script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
        "use strict";
        //click start button to start sequence
        var sequence = [];
        var userSequence = [];
        var setIndex = 0;
        var clickIndex = 0;
        var colorIndex = 0;
        var $divs = $('.square');
        var $start = $('#start');
        var $watch = $('#watch');
        var $round = $('#round');

        function getSquare() {
            var random = Math.floor(Math.random() * $divs.length);
            sequence.push(random);
        }// end of getSquare function

        function highlight() {
            $divs.eq(sequence[setIndex]).animate({opacity: '1.0', height: '200px', width: '200px'}, 500).animate({opacity: '0.4', height: '180px', width: '180px'}, 500);
        };//end of highlight
        function userHighlight() {
            $divs.eq(sequence[colorIndex]).animate({opacity: '1.0', height: '200px', width: '200px'}, 500).animate({opacity: '0.4', height: '180px', width: '180px'}, 500);
        };

        function iterator() {
            if(setIndex<sequence.length) {
                highlight();
                setTimeout(iterator, 1000);
                setIndex++;
            } else {
                setIndex = 0;
            }
        }//end or iterator

        //start computer generated sequence
        $start.click(function(){   
            $round.html("This is round: " + (clickIndex + 1));
            getSquare(); // run on load
            iterator();
            clickIndex++;
            $watch.html("Match the Sequence");
        });//end of start function

        //start user generated sequence
        $divs.click(function(){
            var boxSelect = $(this).data("number");
            if(boxSelect == sequence[colorIndex]) {
                userHighlight();
                colorIndex++;
                if(colorIndex == sequence.length) {
                    colorIndex = 0; 
                }
            } else {
                $('#title').fadeOut().delay(3000).fadeIn();
                $('#hidden_title').fadeIn().delay(3000).fadeOut();
                $('#outsideBox').fadeOut().delay(3000).fadeIn();
                $start.fadeOut().delay(3000).fadeIn();
                $watch.fadeOut().delay(3000).fadeIn();
                $round.fadeOut().delay(3000).fadeIn();

                $('#secret_gif').slideDown().delay(3000).slideUp();
                setIndex = 0;
                clickIndex = 0;
                sequence = [];
                $round.html("Click Start to Begin!");
            }
        });
    });
    </script>
</head>
<body>
    <h1 id="title">Can You Save Simba?!</h1>
    <h1 id="hidden_title">You Blew Up Simba You Monster!</h1>
    <div id="secret_gif">
            <img src="/img/simbaBoom.gif">
    </div>
    <div id="outsideBox" class="container">
        <div id="topLeft" class="square" data-number="0">

        </div>
        <div id="topRight" class="square" data-number="1">
            
        </div>
        <div id="bottomLeft" class="square" data-number="2">
            
        </div>
        <div id="bottomRight" class="square" data-number="3">
            
        </div>
    </div><!-- end of outsideBox -->

    <div id="start">
        <button>Start</button>
    </div>
    <div>
        <p id="round">Click Start to Begin!</p>
        <p id="watch"></p>
    </div>
</body>
</html>