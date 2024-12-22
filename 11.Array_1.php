<?php
// Array without array() function
    $arr = [
        1,
        2, 
        3, 
        4 => [40,
              41,
              42 => [420,
                     421,
                     422,
                     423,
                     424],
              43,
              44], 
        5, 
        6, 
        7, 
        8, 
        9, 
        10
    ];
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
?>
