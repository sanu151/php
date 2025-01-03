<?php
$str = "Hello I am Supriyo Das. I am a web developer.";

echo "Number of words: ".str_word_count($str);
echo "<br>";
echo "Length of String : ".strlen($str);
echo "<br>";
echo str_repeat($str."<br/>", 5);
?>