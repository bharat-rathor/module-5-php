<?php
$str = "Hello";
$reverse = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reverse .= $str[$i];
}

echo "Reversed String: " . $reverse;
?>