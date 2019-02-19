<?php
    function Grade_Calcuration($score){
        $grade = '';
        if ($score >= 0 && $score <= 10) {
            $grade = 'A';
        }elseif ($score >= 11 && $score <= 20) {
            $grade = 'B';
        }else {
            $grade = 'C';
        }
        return $grade;
    }
?>