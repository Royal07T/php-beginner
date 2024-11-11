<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <form action="forms.php" method="post">
                    <label >enter user name</label><br>
                    <input type="text" name="username"> <br>
                    <label > enter password</label><br>
                    <input type="password" name="password" ><br>
                    <label for="email">email</label> <br>
                    <input type="email" name="email"> <br>
                    <label for="age">age</label> <br>
                    <input type="age" name="age"> <br>
                    <input type="submit" name="submit" value="submit" ><br>
                    
                </form>
</body> 
</html>

<?php 
       
        if(isset($_POST["submit"])){
            $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email    = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
            $age    = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

            if(!empty($username)&& ($password) && ($email) && ($age)){
                echo"Congratulations {$username} <br> Your Email is {$email} <br> And your Password is {$password} <br> You are {$age} years old";
            }elseif(empty($username) && ($password) && ($email) && ($age)){
                echo "Empty Username, password or email";
            };
        };




      
?>