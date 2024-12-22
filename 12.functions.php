<?php
    // Functions

    // Function Declaration
    function greet(){
        echo "Hello World!"; // Function Body
    }
    // Function Call
    greet();
    echo "<br>";

    // Function with Parameters
    function greet2($name){
        echo "Hello $name!";
    }
    greet2("Supriyo");
    echo "<br>";

    // Function with Default Parameters
    function greet3($name = "User"){
        echo "Hello $name!";
    }
    greet3();
    echo "<br>";

    // Function with Return Value
    function greet4($name = "User"){
        return "Hello $name!";
    }
    echo greet4("Rupa");
    echo "<br>";

    // Function with Multiple Return Value
    function greet5($name = "User"){
        return ["Hello $name!", "Welcome to PHP!"];
    }
    $result = greet5("Rupa");
    echo "$result[0] <br>";
?>