<?php
    // continue statement

$count = 0;
for($i = 1; $i <= 20; $i++){
    if($i % 2 == 0){
        continue;
    }
    $count++;
    echo $i . "<br>";
}
echo "______________________<br>";
echo "Total odd numbers: " . $count;

?>