<?php
// Example of working with arrays in PHP

// Indexed array
$fruits = array("Apple", "Banana", "Cherry");

// Display the array
print_r($fruits);
echo "<br>I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . "<br><br>";

// Associative array
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

// Add an item to the array
$age['John'] = 40;

// Display the array
echo "<pre>";
print_r($age);
echo "</pre>";
echo "Peter is " . $age['Peter'] . " years old <br>";
echo "John is " . $age['John'] . " years old <br>";


// Multidimensional array
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// Add an item to the array
$cars[] = array("Audi", 10, 8); 

// Display the array
echo "<pre>";
print_r($cars);
echo "</pre>";

// Display the array in a table
for ($row = 0; $row < 5; $row++) {
    echo $cars[$row][0] . ": In stock: " . $cars[$row][1] . ", sold: " . $cars[$row][2] . "<br>";
}
?>