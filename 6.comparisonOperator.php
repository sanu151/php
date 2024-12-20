<?php
    // Comparison Operators
    $a = 5;
    $b = 3;

    echo "\$a = $a, \$b = $b <br>";
    //Equal to
    $c = $a == $b;
    echo "<br> Equal to : \$a == \$b : ";
    var_dump($c);
    //Not Equal to
    $c = $a != $b;
    echo "<br> Not Equal to : \$a != \$b : ";
    var_dump($c);
    //Greter than
    $c = $a > $b;
    echo "<br> Greater than : \$a > \$b : ";
    var_dump( $c);
    //Less than
    $c = $a < $b;
    echo "<br> Less than : \$a < \$b : ";
    var_dump($c);
    //Greater than Equal to
    $c = $a >= $b;
    echo "<br> Greater than Equal to : \$a >= \$b : ";
    var_dump($c);
    //Less than Equal to
    $c = $a <= $b;
    echo "<br> Less than Equal to : \$a <= \$b : ";
    var_dump($c);
    //Spaceship operator
    $c = $a <=> $b;
    echo "<br> Spaceship operator : \$a <=> \$b : ";
    var_dump($c);
?>