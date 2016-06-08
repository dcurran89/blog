<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $post = new Post();
        $post->user_id = User::first()->id;
        $post->title = 'Why I Chose Codeup';
        $post->body = 'I\'m a problem solver and a people pleaser. I feel that one of the best ways to take care of issues that you have is to completely dissect and explore the issue only to come out of it having learned something. Coding provides me with a way to fully immerse myself into something that I have created so I know that every error, mistake, or syntax error were caused by me not knowing what I\'m doing. Every time I fix one of the errors that get thrown at me I learn a new technique or I learn not to repeat my mistakes. I can  be completely proud of what is on the screen because I am making that happen one step at a time. Ive always enjoyed helping people out. BLAH BLAH BLAH BLAH
            ...to be continued';
        $post->img_path = '/img/typing.gif';
        $post->save();

        $post = new Post();
        $post->user_id = 1;
        $post->title = 'The Boondock Saints Prayer';
        $post->body = 'And Shepherds we shall be For thee, my Lord, for thee. Power hath descended forth from Thy hand Our feet may swiftly carry out Thy commands. So we shall flow a river forth to Thee And teeming with souls shall it ever be. In Nomeni Patri Et Fili Spiritus Sancti.
            Talk about why I got my tattoos.';
        $post->img_path = '/img/firefight.jpg';
        $post->save();

        $post = new Post();
        $post->user_id = 1;
        $post->title = 'Ernest Hemingway - A Farewell to Arms';
        $post->body = 'If people bring so much courage to this world the world has to kill them to break them, so of course it kills them. The world breaks every one and afterward many are strong at the broken places. But those that will not break it kills. It kills the very good and the very gentle and the very brave impartially. If you are none of these you can be sure it will kill you too but there will be no special hurry.';
        $post->img_path = '/img/fairwell-arms.jpg';
        $post->save();

        $post = new Post();
        $post->user_id = 2;
        $post->title = 'The Sandman - Neil Gaiman';
        $post->body = 'Have you ever been in love? Horrible isn\'t it? It makes you so vulnerable. It opens your chest and it opens up your heart and it means someone can get inside you and mess you up. You build up all these defenses. You build up a whole armor, for years, so nothing can hurt you, then one stupid person, no different from any other stupid person, wanders into your stupid life... You give them a piece of you. They didn\'t ask for it. They did something dumb one day, like kiss you or smile at you, and then your life isn\'t your own anymore. Love takes hostages. It gets inside you. It eats you out and leaves you crying in the darkness, so simple a phrase like \'maybe we should be just friends\' or \'how very perceptive\' turns into a glass splinter working its way into your heart. It hurts. Not just in the imagination. Not just in the mind. It\'s a soul-hurt, a body-hurt, a real gets-inside-you-and-rips-you-apart pain. Nothing should be able to do that. Especially not love. I hate love.';
        $post->img_path = '/img/kindlyones.jpg';
        $post->save();

        $post = new Post();
        $post->user_id = 1;
        $post->title = 'Bacon!';
        $post->body = 'Bacon ipsum dolor amet frankfurter strip steak ground round chicken brisket jowl ham meatball leberkas shankle. Ground round biltong shankle, pig meatloaf pancetta alcatra jerky venison cupim andouille picanha bresaola kielbasa. Tongue tenderloin beef, doner landjaeger meatloaf rump picanha venison shank andouille. Doner frankfurter leberkas ground round pancetta, rump jerky. 
            Ham hock short ribs bresaola leberkas ball tip cupim. Turducken kevin pork chop cow ham venison bresaola tail. Shankle pork belly bacon pastrami. Cow pastrami brisket, chuck pancetta pork chop swine boudin pork turkey frankfurter prosciutto landjaeger ball tip.
            Shankle meatloaf fatback cow, ham hock pastrami pig. Drumstick tri-tip frankfurter sausage, swine meatloaf strip steak. Meatloaf pork belly andouille capicola ball tip pastrami ham tail frankfurter porchetta beef ribs. Sausage corned beef salami beef. Meatball drumstick ball tip short loin pork belly alcatra sausage sirloin. Bacon shank jerky drumstick capicola, kevin chicken salami jowl t-bone ham.
            Shoulder venison sirloin, porchetta meatball cupim tail frankfurter turkey pork strip steak ribeye chicken. Swine biltong capicola kielbasa cupim. Pig landjaeger swine, ground round porchetta picanha shank sausage boudin meatloaf tongue bresaola venison. Meatloaf tenderloin flank pancetta cupim corned beef ball tip jowl short ribs chicken frankfurter sirloin drumstick leberkas. Boudin pork loin drumstick sirloin chicken shankle cow t-bone porchetta. Picanha filet mignon ribeye fatback, pancetta ground round tenderloin doner boudin jowl bacon flank t-bone.
            Picanha shank hamburger alcatra flank turkey. Pig rump capicola landjaeger kevin. Strip steak drumstick sausage porchetta pastrami, beef ham hock short ribs short loin. Pork chop prosciutto pastrami sirloin, tail corned beef meatloaf tri-tip. Frankfurter turducken tri-tip fatback. Porchetta jowl alcatra, bacon biltong picanha swine andouille meatball turducken sausage kielbasa tenderloin frankfurter. Tenderloin drumstick bacon turkey pig spare ribs capicola rump landjaeger boudin picanha turducken corned beef beef.';
        $post->img_path = '/img/futurebacon.jpeg';
        $post->save();

        $post = new Post();
        $post->user_id = 2;
        $post->title = 'Trying to get pagination going';
        $post->body = 'So I added more than 4 posts';
        $post->img_path = '/img/fantasy.jpg';
        $post->save();
    }
}


?>