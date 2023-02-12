<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excercise 3</title>
</head>

<body>

  <?php

  $notes = array(12, 14.5, 16, 8, 11, 20, 5, 19, 17, 15, 13, 12, 17, 18.5, 6);
    function displayArray($array) {
      for ( $i = 1; $i <= count($array); $i++) {
      echo "Element $i: {$array[$i-1]} <br>" ;
      }
    }

  // displayTable($notes);
  ?>

  <?php
  function meanArray($array) {
    $length = count($array);
    $sum = 0;
    foreach ($array as $elem) {
      $sum += $elem; 
    }
    return $sum / $length;
  }

  $mean = meanArray($notes);
  echo "The mean of the array is : $mean <br>" ;
  ?>

  <?php
    function over10($array) {
    $output = 0;
    foreach ($array as $elem) {
      if ($elem > 10)
        $output++;
    }
    return $output;
    }

  $gt10 = over10($notes);
  echo "The number of notes greater than 10 is: $gt10 <br>";
  ?>

  <?php
  function perfectScore($array) {
    $output = 0;
    foreach($array as $note) {
      if ($note == 20)
      $output++;
    }
    return $output;
  }

  $twenties = perfectScore($notes);
  echo "The number of students who got 20 is: $twenties <br>";
  
  ?>

  <?php
  
  function swapArrayElements($arr, $i, $j) {
    $val1 = $arr[$i];
    $val2 = $arr[$j];
    $arr[$i] = $val2;
    $arr[$j] = $val1;
    return $arr;
  }
  
  function sortArray($array) {
    for ($i = 0; $i < count($array); $i++) {
      for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
          swapArrayElements($array, $i, $j);
        }
      }
    }
    return $array;
  }

  swapArrayElements($notes, 0, 1);
  print_r($notes);
  ?>

  <?php
  function searchIndex($array, $value) {
    for($i = 0; $i < count($array); $i++) {
      if ($array[$i] == $value) {
        echo "The value was found at index: $i <br>";
        return $i;
      }
    }
    echo "The value was not found...";
    return -1;
  }
  ?>

</body>

</html>