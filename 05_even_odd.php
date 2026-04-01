<?php 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <input type="number" placeholder="enter number" name="number">
                </td>
                <td>
                    <input type="submit" value="check" name="submit">
                </td>
            </tr>
            <tr>
                <input type="text" value="
                <?php

                if(isset($_POST['submit'])){
                    $number=$_POST['number'];
                    if($number%2==0){
                        echo "Number Is Even";
                    }else{
                        echo "number is odd";
                    }
                }


                ?>
                ">
            </tr>
        </table>
    </form>
</body>
</html>