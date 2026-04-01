<?php

// Set timezone
date_default_timezone_set("Asia/Kolkata");

// 1. Basic Date
echo "Date (Y-m-d): " . date("Y-m-d") . "<br>";

// 2. Date with Day Name
echo "Full Date: " . date("l, d F Y") . "<br>";

// 3. Time only
echo "Time (H:i:s): " . date("H:i:s") . "<br>";

// 4. Date & Time together
echo "Date & Time: " . date("Y-m-d H:i:s") . "<br>";

// 5. Short format
echo "Short Format: " . date("d/m/y") . "<br>";

// 6. 12-hour format with AM/PM
echo "12-hour Time: " . date("h:i:s A") . "<br>";

?>