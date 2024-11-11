<form action="calculator.php" method="post">
  <input type="number" name="num1" required>
  <select name="operation">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
  </select>
  <input type="number" name="num2" required>
  <button type="submit">Calculate</button>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST["num1"];
  $operation = $_POST["operation"];
  $num2 = $_POST["num2"];
  
  switch ($operation) {
    case "add":
      $result = $num1 + $num2;
      break;
    case "subtract":
      $result = $num1 - $num2;
      break;
    case "multiply":
      $result = $num1 * $num2;
      break;
    case "divide":
      if ($num2 != 0) {
        $result = $num1 / $num2;
      } else {
        $result = "Error: Division by zero!";
      }
      break;
  }
  
  echo "Result: $result";
}
?>