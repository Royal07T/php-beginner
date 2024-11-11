<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
            <body>
                        <form action="sanitize.php" method="post">
                            <label for="username">username</label> <br>
                            <input type="text" name="username" ><br>
                            <label for="password">password</label><br>
                            <input type="password" name="password" > <br>
                            <label for="text">age</label><br>
                            <input type="age" name="age" > <br>
                            <label for="email">email</label> <br>
                            <input type="email" name="email" > <br>
                            <input type="submit" name="submit" value="submit"> <br>

                        </form>
            </body>
</html>

<?php 
       if(isset($_POST["submit"])){
            $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password",FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);
            $age = filter_input(INPUT_POST, "age",FILTER_SANITIZE_NUMBER_INT);

            $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
            $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
            if(empty($age) && ($email)){
                echo "Invalid age and email";
            }else{
        echo " your username is {$username} <br> Your password is  {$password} <br> your email is {$email} <br> your age is {$age}";
       }
    };
?>