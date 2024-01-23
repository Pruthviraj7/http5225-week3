<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,100));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        if($randomNumber<60){
            
        }
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkCTA='Codecademy';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';
            $linkCTA="W3 School";

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://developer.mozilla.org/en-US/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';
            $linkCTA='Mozilla';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';
        echo '<a href="'.$linkURL.'">'.$linkURL.'</a>';
        // echo '<p>'.$linkURL.'</p>';
        if($linkURL===" "){
            echo '<a href="">'.$linkCTA. '</a>';
        }else{
            
            echo '<a href="'.$linkURL.'">'.$linkCTA.'</a>';
        }
        echo '<img src="'.$linkImage.'" width="200"/>';
        

        ?>

    </body>
</html>