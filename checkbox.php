<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="volvo" value="volvo"> VOLVO <br>
        <input type="checkbox" name="dodge" value="dodge"> Dodge <br>
        <input type="checkbox" name="toyota" value="toyota"> Toyota <br>
        <input type="checkbox" name="bmw" value="bmw"> B.M.W <br>
        <input type="checkbox" name="mustang" value="mustang"> Mustang<br>
        <input type="submit" name="submit" value="submit"> <br>

    </form>
</body>
</html>

<?php 
        if(isset($_POST['submit'])){
            if(isset($_POST['volvo'])){
                echo "You like volvo <br>";
            }if(isset($_POST['dodge'])){
                echo "You like Dodge <br>";
            }if(isset($_POST['toyota'])){
                echo "You like Toyota <br>";
            }if(isset($_POST['bmw'])){
                echo "You like B.M.W <br>";
            }if(isset($_POST['mustang'])){
                echo "You like Mustang <br>";

            }if(empty($_POST['volvo'])){
                echo "You don't like Volvo <br>";
            }if(empty($_POST['dodge'])){
                echo "You don't like Dodge <br>";
            }if(empty($_POST['toyota'])){
                echo "You don't like Toyota <br>";
            }if(empty($_POST['bmw'])){
                echo "You don't like BMW <br>";
            }if(empty($_POST['mustang'])){
                echo "You don't like Mustang <br>";
            }
        }
?>