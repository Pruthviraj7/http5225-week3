<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Generate a random number (1, 2, or 3)
    $randomNumber = ceil(rand(1,100));

    // Display the random number
    echo '<p>The random number is '.$randomNumber.'.</p>';

    if($randomNumber<60){
        echo "<h2>You will not be able to pass this sem</h2>";
    }
    elseif($randomNumber>=60 && $randomNumber<=70){
        echo "<h2>You just passed this sem with grade E</h2>";
    }
    elseif($randomNumber>=70 && $randomNumber<=75){
        echo "<h2>You just passed this sem with grade D</h2>";
    }
    elseif($randomNumber>=75 && $randomNumber<=80){
        echo "<h2>You just passed this sem with grade C</h2>";
    }
    elseif($randomNumber>=80 && $randomNumber<=85){
        echo "<h2>You just passed this sem with grade B</h2>";
    }
    elseif($randomNumber>=85 && $randomNumber<=90){
        echo "<h2>You just passed this sem with grade A</h2>";
    }
    elseif($randomNumber>90){
        echo "<h2>CONGRATULATIONS YOU GOT GRADE A+</h2>";
    }

    $randomDay=ceil(rand(1,7));
    echo '<p>The random number is '.$randomDay.'.</p>';


    switch($randomDay){
        case 1:
            echo "<h2>Sad , Its Monday</h2>";
            break;
        case 2:
            echo "<h2>Tuesday get back to your work</h2>";
            break;
        case 3:
            echo "<h2>Wednesday boring day</h2>";
            break;
        case 4:
            echo "<h2>Thursday, just 2 days for weekend</h2>";
            break;
        case 5:
            echo "<h2>Almost Weeekend its friday</h2>";
            break;
        case 6:
            echo "<h2>Saturday night Party Night</h2>";
            break;
        case 7:
            echo "<h2>Its SUnday Take some rest</h2>";
            break;
        
    }

    ?>
    
</body>
</html>