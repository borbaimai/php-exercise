<?php
$drawmoney = 0;
$money = 0;
$bank1000 = 0;
$bank500 = 0;
$bank100 = 0;

   if ($_SERVER['REQUEST_METHOD']=='POST') {
        $drawmoney = $money = $_POST['money'];

        $bank1000 = floor($money/1000);
        $money -= 1000*$bank1000;

        $bank500 = floor($money/500);
        $money -= 500*$bank500;

        $bank100 = floor($money/100);
        $money -= 100*$bank100;

        /*while ($money >= 1000) {
            $money -= 1000;
            $bank1000 += 1;
        }

        while ($money >= 500) {
            $money -= 500;
            $bank500 += 1;
        }

        while ($money >= 100) {
            $money -= 100;
            $bank100 += 1;
        }*/

        /*for ($bank1000=0; $money >= 1000 ; $bank1000++) { 
            $money -= 1000;
        }

        for ($bank500=0; $money >= 500 ; $bank500++) { 
            $money -= 500;
        }

        for ($bank100=0; $money >= 100 ; $bank100++) { 
            $money -= 100;
        }*/


   }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATM</title>
</head>
<body>
    <form action="" method="post">
    <label for="">ถอนจำนวน</label>
    <input type="text" name="money">
    <span>บาท</span>
    <input type="submit" value="submit">
    </form>
    <?php
        echo "<h1>จำนวนเงินที่ถอน</h1>";
        echo "จำนวนที่ถอน ".$drawmoney." บาท<br>";
        echo "แบงค์ 1000 จำนวน ".$bank1000." ใบ<br>";
        echo "แบงค์ 500 จำนวน ".$bank500." ใบ<br>";
        echo "แบงค์ 100 จำนวน ".$bank100." ใบ<br>";
        echo "จำนวนที่เหลือ ".$money." บาท";
    ?>
</body>
</html>