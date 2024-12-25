<?php
    // For each loop
    $cources = array(
        "HTML" => 2500,
        "CSS" => 3000,
        "JS" => 4000,
        "PHP" => 5000,
        "Laravel" => 6000
    );

    echo "<pre>";
    print_r($cources);
    echo "</pre>";

    foreach($cources as $key => $value){
        echo "The fees of $key is ₹ $value <br>";
    }
?>