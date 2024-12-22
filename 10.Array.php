<?php
// Example of working with arrays in PHP

// Indexed array
$fruits = array("Apple", "Banana", "Cherry");
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . "<br>";

// Associative array
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo "Peter is " . $age['Peter'] . " years old <br><br>";

// Multidimensional array
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo "<pre>";
print_r($cars);
echo "</pre>";

for ($row = 0; $row < 4; $row++) {
    echo $cars[$row][0] . ": In stock: " . $cars[$row][1] . ", sold: " . $cars[$row][2] . "<br>";
}
?>