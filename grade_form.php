<?php
    include("grade_function.php");

    $grade_array = ['A','B','C','D','E','F','G','H','I','J'];
    $grade = 'null';

    $score = $_POST['txt_score'];
    $grade = Grade_Calcuration($score);
    echo $grade;
?>

    <h1>Show Grade</h1>
    <label>เกรดที่คุณได้คือ <?php echo $grade ?></label><br>
    <label>เกรดที่เหลืออยู่คือ 
        <?php 
            foreach ($grade_array as $grade) {
                echo $grade." ";
            } 
        ?>
    </label>
