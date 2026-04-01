<?php

// Original strings
$str1 = "Hello";
$str2 = "World";

// 1. Concatenation
$concat = $str1 . " " . $str2;
echo "Concatenation: " . $concat . "<br>";

// 2. String Length
$length = strlen($concat);
echo "String Length: " . $length . "<br>";

// 3. Substring Extraction
$substring = substr($concat, 0, 5);
echo "Substring (first 5 chars): " . $substring . "<br>";

// 4. Another substring example
$substring2 = substr($concat, 6);
echo "Substring (from index 6): " . $substring2 . "<br>";

?>