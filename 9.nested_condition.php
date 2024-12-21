<?php
    $year = 2025;

    if($year % 4 == 0){
        if($year % 100 == 0){
            if($year % 400 == 0){
                echo "$year is a Leap year";
            }else{
                echo "$year is not a Leap year";
            }
        }else{
            echo "$year is a Leap year";
        }
    }else{
        echo "$year is not a Leap year";
    }
?>