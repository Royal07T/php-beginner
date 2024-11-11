<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <h3>Pick a Payment method</h3>
        <form action="radio.php" method="post">
            <input type="radio" name="creditcard" value="visa"> Visa <br>
            <input type="radio"name="creditcard" value="mastercard"> Mastercard <br>
            <input type="radio" name="creditcard"value="american express"> American express <br>
            <input type="radio"name="creditcard" value="verve">Verv <br>
            <input type="submit" name="confirm" value="confirm">
        </form>
</body>
</html>

<?php 

      if(isset($_POST["confirm"])){
         $credit_card = null;
         $credit_card = $_POST["creditcard"];
      } switch($credit_card){
            case 'visa':
                echo"You choose a visa payment method";
                break;
            case 'mastercard':
                echo "You choose a mastercard payment method";
                break;
            case 'american express':
                echo "You choose american express as a payment method";
                break;
            case 'verve':
                echo "You choose a verve payment method";
                break;
            default:
                echo "Please make a payment mnethod";
                
      }

?>