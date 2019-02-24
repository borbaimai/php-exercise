
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
    <label><h1>Pleases Enter The Withdrawal Amount : </h1></label>
    <input type='text' name='withdraw' value='' />
    <input type="submit" value="Press if correct">
 
</form>
    
<?php

if ( !empty($_POST['withdraw']) &&
($_POST['withdraw']%10)==0 &&
($_POST['withdraw']%100)!=10   &&
($_POST['withdraw']%100)!=30  ) {
    
    
    
    $a=$_POST['withdraw'];        
    for ($i=0;$a>=1000 ;$i++){
    $a=$a-1000;
    }

    for ($j=0;$a>=500 ;$j++){
    $a=$a-500;
    }

    for ($k=0;$a>=100 ;$k++){
    $a=$a-100;
    }
    $l=0;
    $m=0;


    if ( ($a==50) || ($a==70) || ($a==90) ) {

        $l=1;
        $a=$a-50;
        
        for ($m=0;$a>=20 ;$m++){
            $a=$a-20;
        }

    }else{
    
        for ($m=0;$a>=20 ;$m++){
        $a=$a-20;
        }
    }
    

echo "<br><br><h1>Requested Amount : </h1>".$_POST['withdraw']. "Baht";
echo "<br><br><h1>You will get : </h1>";
echo "<br>".$i." one-thousand-baht note";
echo "<br>".$j." five-hundred-baht note";
echo "<br>".$k." hundred-baht note";
echo "<br>".$l." fifty-baht note";
echo "<br>".$m." twenty-baht note";
}



?>


</body>
</html>