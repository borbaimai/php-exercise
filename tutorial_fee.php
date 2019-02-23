

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>


<?php

if (!empty($_POST["hours"])){


$fee=$_POST["hours"]*300;

echo "Total:".$fee;

    

   

        if (!empty($_POST["mypay"])){
        $charge=$_POST["mypay"]-$fee;
        echo "<br>Pay:".$_POST["mypay"];
        echo "<br>Charge:".$charge;
        } else {
        
        echo "<form action='' method='post'>
        <label>Pay</label>
        <input type='text' name='mypay' value='' />
        <input type='hidden' name='hours' value='{$_POST["hours"]}' />
        <input type='submit' />
        </form>";   
        }
   



}else { ?>
    <form action='' method='post'>
    <label>Enter Hours</label>
    <input type='text' name='hours' value='' />
    <input type='submit' />
    </form>
    
<?php } ?>








</body>
</html>