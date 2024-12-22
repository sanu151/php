<?php
    $a = 1; // true
    $b = 0; // false

    // AND Operator
    $c = $a && $b; 
    echo "\$c = \$a && \$b : ";
    var_dump($c);

    // OR Operator
    $c = $a || $b;
    echo "<br> \$c = \$a || \$b : ";
    var_dump($c);

    // NOT Operator
    $c = $a && !$b;
    echo "<br> \$c = \$a && !\$b : ";
    var_dump($c);

    // TURNARY Operator
    echo "<br>";
    $x = 15;
    $x > 9 ? $flag = "Yes" : $flag = "NO";
    var_dump($flag);
?>