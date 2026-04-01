<?php 

echo "please select the operation : <br>";
echo "1 addition <br>";
echo "2 subtraction <br>";
echo "3 multiplication <br>";
echo "4 division<br>";


if(isset($_POST['submit'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];

    function add($num1,$num2){
    echo "The Sum is <br>";
    $add = $num1+$num2;
    echo $add;
}

function sub($num1,$num2){
    echo "The Sum is <br>";
    $add = $num1+$num2;
    echo $add;
}

 function mul($num1,$num2){
    echo "The Sum is <br>";
    $add = $num1+$num2;
    echo $add;
}

 function divi($num1,$num2){
    echo "The Sum is <br>";
    $add = $num1+$num2;
    echo $add;
}
}

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
                    <input type="text" name="num1" placeholder="enter number 1">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="num2" placeholder="enter number 2">
                </td>
            </tr>
             <tr>
                <td>
                    <input type="text" name="choice" placeholder="enter choice">
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
    $choice = $_POST['choice'];

    switch($choice){
        case 1 :
            add($num1,$num2);
            break;
        case 2:
            sub($num1,$nnum2);
            break;
        case 3:
            mul($num1,$num2);
            break;
        case 4:
            divi($num1,$num2);
            break;
        default:
            echo "please enter valid number";
    }
}
?>