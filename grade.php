<?php

$grade = '';
$grade_left = '';
$grade_array = [];

if (isset($_POST['txt_score'])) {

    $score = $_POST['txt_score'];
    $grade_array = ['S'=>51,'A'=>41,'B'=>31,'C'=>21,'D'=>11,'E'=>0];
    
    /*if ($score >= 41) {
        $grade = 'A';
        $grade_left = 'B C D E';
    }elseif ($score >= 31) {
        $grade = 'B';
        $grade_left = 'A C D E';
    }elseif ($score >= 21) {
        $grade = 'C';
        $grade_left = 'A B D E';
    }elseif ($score >= 11) {
        $grade = 'D';
        $grade_left = 'A B C E';
    }else{
        $grade = 'E';
        $grade_left = 'A B C D';
    }*/
    
    /*$x = 41;
    for ($i=0; $i < ; $i++) { 
        if ($score >= $x) {
            $grade = $grade_array[$i];
            break;
        }else {
            $grade = $grade_array[$i];
        }
        $x -= 10;
    }*/

    foreach ($grade_array as $key => $value) {
        if ($score >= $value) {
            $grade = $key;
            break;
        }else {
            $grade = $key;
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="txt_score">
        <input type="submit" value="ส่งข้อมูล">
    </form>
    <h1>Show Grade</h1>
    <label>เกรดที่คุณได้คือ <?php echo $grade ?></label><br>
    <label>เกรดที่เหลืออยู่คือ 

    <?php 
    
        
        //echo $grade_left;
        unset($grade_array[$grade]);
        foreach ($grade_array as $key => $value) {
            echo $key.' ';
        }
        
    ?>
        
    </label>
</body>
</html>