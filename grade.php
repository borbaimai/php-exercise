<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action='' method='post'>
<label><h1>Pleases Enter Your Score : </h1></label>
<input type='text' name='score' />
<input type="submit" value="Enter">  

<?php


$score=0;
if (!empty($_POST["score"])){
$score=$_POST["score"];
}
Echo "<br><br>Your score : ".$score."<br>";
    if ( ($score>=41) && ($score<=50) ) {
        echo "You are fucking clever!!! Congratulations! You got grade A. Tell your parents to get some candies";
    }

    elseif ( ($score>=31) && ($score<=40) ) {
        echo "BBBBBBBBBBBBBB ya! That is your grade.";
    }

    elseif ( ($score>=21) && ($score<=30) ) {
        echo "Wow!! You got C. Michael is super hot, isnt she? Why didnt you ask her to date?";
    }

    elseif ( ($score>=11) && ($score<=20) ) {
        echo "Read some books before sleep. You got grade D. That means you are more stupid than average";
    }

    elseif ( ($score>=0) && ($score<=10) ) {
        echo "Umm..Go ask your parent if they gave you the thing called brain. You got grade E, bro.";
    }


    else { echo "ERROR !! Fill your score again";
    }


?>

</body>
</html>