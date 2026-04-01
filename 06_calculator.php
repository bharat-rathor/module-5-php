<?php 

echo "please select the operation : <br>";
echo "1 addition <br>";
echo "2 subtraction <br>";
echo "3 multiplication <br>";
echo "4 division<br>";



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
                <td><input type="number" name="number1" id="" placeholder="enter number 1"></td>
            </tr>
            <tr>
                <td><input type="number" name="number2" id="" placeholder="enter number 2"></td>
            </tr>
            <tr>
                <td>
                    <input type="text" placeholder="enter your choice" name="choice">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php 

if(isset($_POST['submit'])){
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
    $choice=$_POST['choice'];



    if($choice==1){
        echo "SUM IS <br>";
        $sum = $num1+$num2;
        echo $sum;
    }
    else if($choice==2){
        echo "SUM IS <br>";
        $sum = $num1-$num2;
        echo $sum;
    }
    else if($choice==3){
        echo "SUM IS <br>";
        $sum = $num1*$num2;
        echo $sum;
    }
    else if($choice==4){
        echo "SUM IS <br>";
        $sum = $num1/$num2;
        echo $sum;
    }
    else{
        echo "PLEASE ENTER VALID CHOICE";
    }
}


?>