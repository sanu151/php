<?php
    // implode function
    $arr = array('Hello', 'World', 'How', 'Are', 'You');
    $str = implode(" ", $arr);
    echo $str;

    // explode function

    $str1 = "A quick brown fox jumps over the lazy dog";
    $arr1 = explode(" ", $str1);
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";
?>