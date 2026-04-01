<?php
$isLoggedIn = false;

if (!$isLoggedIn) {
    header("Location: login.php");
    exit;
}

echo "Welcome User!";
?>