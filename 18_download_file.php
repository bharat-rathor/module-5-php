<form method="post">
    <button name="download">Download File</button>
</form>

<?php
if (isset($_POST['download'])) {
    $file = "sample.txt"; // file must exist

    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"sample.txt\"");
    readfile($file);
    exit;
}
?>