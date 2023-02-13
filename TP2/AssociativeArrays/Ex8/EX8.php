<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 8</title>
</head>

<body>

  <?php
  // Question 1
  $modules = array(
    "Et123" => array("AB", "AC", array(
      "module1" => 2,
      "module2" => 2,
      "module3" => 2,
      "module4" => 12,
      "module5" => 12,
      "module6" => 12,
      "module7" => 2,
      "module8" => 15
    )),
    "Et676" => array("BC", "BD", array(
      "module1" => 2,
      "module2" => 5,
      "module3" => 5,
      "module4" => 6,
      "module5" => 8,
      "module6" => 8,
      "module7" => 2,
      "module8" => 10
    )),
    "Et998" => array("CD", "CE", array(
      "module1" => 17,
      "module2" => 17,
      "module3" => 2,
      "module4" => 0,
      "module5" => 0,
      "module6" => 2,
      "module7" => 2,
      "module8" => 8
    )),
    "Et764" => array("DE", "DF", array(
      "module1" => 2,
      "module2" => 16,
      "module3" => 16,
      "module4" => 13,
      "module5" => 13,
      "module6" => 2,
      "module7" => 9,
      "module8" => 6
    )),
  );



  // Question 2


  foreach ($modules as $key => $val) {

    echo "Student $key : ";

    $min = "module1";
    $max = "module1";
    foreach ($val[2] as $module => $grade) {
      if ($grade > $val[2][$max]) {
        $max = $module;
      }
      if ($grade < $val[2][$min]) {
        $min = $module;
      }
    }
    $student = $val[2];
    echo "Best grade : $student[$max], Worst grade : $student[$min] <br>";
  }


  // Question 3
  for ($i = 0; $i < count($modules["Et123"][2]); $i++) {
    $INDEX = $i + 1;
    echo "For the course $INDEX:  ";
    $max = 0;
    $min = 1000;
    $name = "module" . $INDEX;
    foreach ($modules as $key => $val) {
      if ($val[2][$name] > $max) {
        $max = $val[2][$name];
      }
      if ($val[2][$name] < $min) {
        $min = $val[2][$name];
      }
    }

    echo "The maximum grade is : " . $max. ', and ';
    echo "the minimum grade is : " . $min;
    echo '<br>';
  }


  // Question 4
  foreach ($modules as $key => $val) {

    echo "For the student $key : <br>";

    $mean = 0;
    foreach ($val[2] as $pey => $pal) {
      $mean += $pal;
    }
    $mean /= count($val[2]);
    echo "The mean of grades of the student is:  $mean <br>";
    if ($mean > 10) {
      echo "<p>The student has passed the year</p>";
    } else {
      echo "<p>Cet eleve va repasser l'annee</p>";
    }
  }
  ?>
</body>

</html>