<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="counter" name="counter" >enter number to count down  and up</label>
        <input type="text" name="input"> <br>
        <input type="submit" name="submit" value="start">
    </form>

   
</body>
</html>

<?php 

       /* 
        $input = $_POST["input"];

        for($i = $input;$i >=1 ;$i--){
            echo "$i . <br>";
        };
        */


        $input = $_POST["input"];

        for($i = 1;$i <=$input ;$i++){
            echo "$i . <br>";
        };

?>