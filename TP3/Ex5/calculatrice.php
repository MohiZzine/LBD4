<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator | Exercise 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <h2 class="m-5 font-weight-bold text-center">Calculator</h2>
  <div class="text-center p-3 m-2">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <label for="operand1" class="d-block">First Operand:</label>
        <input type="number" name="operand1" id="operand1" min="-999999" step="0.1" value="0">
        <div class="d-flex justify-content-around">
          <label for="Operator">Choose the operator</label>
          <input type="radio" class="" name="operator" id="operator" value="+" required><label for="+" class="m-2">+</label>
          <input type="radio" name="operator" id="operator" value="-"><label for="-" class="m-2">-</label>
          <input type="radio" name="operator" id="operator" value="*"><label for="*" class="m-2">*</label>
          <input type="radio" name="operator" id="operator" value="/"><label for="/" class="m-2">/</label>
        </div>
        <label for="operand2" class="d-block">Second Operand:</label>
        <input type="number" name="operand2" id="operand2" min="-999999" step="0.1" value="0">
        <input type="submit" class="m-4 btn btn-primary" name="submit" value="Calculate">
      </div>
    </form>
  </div>

  <?php

  if (isset($_GET['submit'])) {
    ['operand1' => $first, 'operand2' => $second, 'operator' => $operator] = $_GET;
    $result = 0;
    switch($operator) {
      case '+':
        $result = $first + $second;
        break;
      case '-':
        $result = $first - $second;
        break;
      case '*':
        $result = $first * $second;
        break;
      case '/':
        $result = $first / $second;
        break;
      default:
        $result = $first + $second;
        break;
    }
    echo "<div class='container-md p-4 text-center border border-4 border-primary'>";
    echo "The result of the operation is: <span class='lead font-weight-bold text-danger mx-2'>{$result}</span>";
    echo "</div>";
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>