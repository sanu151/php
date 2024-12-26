<?php
    // Recursive Function

    $num = 8;

    function factorial ($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    echo "$num! = ".factorial($num);
?>