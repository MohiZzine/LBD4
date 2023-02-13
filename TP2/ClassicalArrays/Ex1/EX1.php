<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excercise 1</title>
</head>

<body>

  <?php

    // Question 1
    function display($array) {
      foreach($array as $element) {
      echo "{$element}";
      }
    } 
    
    // Question 2
    function sortTable($array) {
    return sort($array);
    }

    // Question 3
    function deleteDoublons($array) {
      for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
          if ($array[$i] == $array[$j]) {
          unset($array[$j]);
          }
        }
      }
    return $array;
    }

  $example = array(1, 2, 2, 3, 3, 4, 5, 5);
  var_dump(deleteDoublons($example)); 
  ?>
</body>

</html>