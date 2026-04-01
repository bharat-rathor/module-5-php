
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
                <td>Name : </td>
                <td>
                    <input type="text" name="name" id="name" placeholder="Enter Name ">
                </td>
            </tr>
            <tr>
                <td>
                    Email : 
                </td>
                <td>
                    <input type="email" name="email" id="" placeholder="Enter Email">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>

            <tr>
                <?php 

                if(isset($_POST['submit'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];

                    echo "The Name is ".$name;
                    echo "The Email is ".$email;
                }

                ?>
            </tr>
        </table>
    </form>
</body>
</html>