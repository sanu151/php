<?php
    $cars = array(
        "A" => "Volvo",
        "B" => "BMW",
        "C" => "Toyota",
        "D" => "Ford",
        "E" => "Audi",
        "F" => "Mercedes",
        "G" => "Ferrari",
    );

    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    // is_array() function
    if(is_array($cars)){
        echo "Yes, \$cars is an array";
    }else{
        echo "No, \$cars is not an array";
    }

    // array_search() function
    echo "<br>";
    echo "The key of Ferrari is: ".array_search("Ferrari", $cars);
    echo "<br>";
    echo "The key of Ford is: ".array_search("Ford", $cars);

    // array_slice() function
    $newCars = array_slice($cars, 2);
    echo "<pre>";
    print_r($newCars);
    echo "</pre>";

    // array_chunk() function
    $newCars = array_chunk($cars, 3);
    echo "<pre>";
    print_r($newCars);
    echo "</pre>";

    // array_pop() function
    $popedArray = array_pop($cars);
    echo "Poped from Array : $popedArray";

    // array_push() function
    array_push($cars, "Ferrari");
    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    // array_keys() function
    $keys = array_keys($cars);
    echo "<pre>";
    print_r($keys);
    echo "</pre>";

    // array_key_exists() function
    var_dump(array_key_exists("D", $cars));

    // count() function
    echo "Total elements in array: ".count($cars);

    // array_values() function
    $values = array_values($cars);
    echo "<pre>";
    print_r($values);
    echo "</pre>";

    // array_merge() function
    $newCars = array(
        "H" => "Lamborghini",
        "I" => "Bugatti",
        "J" => "Koenigsegg",
    );
    $mergedArray = array_merge($cars, $newCars);
    echo "<pre>";
    print_r($mergedArray);
    echo "</pre>";
?>