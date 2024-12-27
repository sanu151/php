<?php
// String replace

// Replace all occurrences of the search string with the replacement string
// Syntax: string str_replace(search, replace, subject, count)

$str = "Hello, my name is Supriyo Das. I am a web developer. I am learning PHP.";
echo str_replace("PHP", "Full Stack Web Development", $str);
echo "<br>";
echo $str;
echo "<br>";


$str1 = "Run Run Run Run";
echo str_replace("Run", "Stop", $str1, $count);
echo "<br>";
echo "Number of replacement: $count";
?>