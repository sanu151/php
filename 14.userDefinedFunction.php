<?php
    function vote($age){
        if($age >= 18 && $age <= 65){
            return "Age $age : You are eligible to vote";
        }
        else{
            return "Age $age : You are not eligible to vote";
        }
    };

    echo vote(24)."<br>";
    echo vote(15)."<br>";
?>