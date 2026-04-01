<form method="post">
    Enter Color: <input type="text" name="color">
    <input type="submit" value="Submit">
</form>

<?php
if ($_POST) {
    $color = strtolower($_POST['color']);

    if ($color == "red") {
        echo "You selected Red color";
    } elseif ($color == "green") {
        echo "You selected Green color";
    } elseif ($color == "blue") {
        echo "You selected Blue color";
    } else {
        echo "Invalid color selected";
    }
}
?>