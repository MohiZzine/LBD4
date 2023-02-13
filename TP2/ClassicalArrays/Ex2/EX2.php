<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 2</title>
</head>

<body>
  <?php
    $moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 
    'Octobre', 'Novembre', 'Décembre');

    // Question 1.a
    echo "<br>Using the for loop: <br><br>";
    for($i = 1; $i <= count($moisFr); $i++ ){
        echo $i." _ ".$moisFr[$i]."<br>";
    }


    // Question 1.b
    echo "<br>Using the foreach loop:<br><br>";
    $ind = 1;
    foreach($moisFr as $value){
        echo $j." _ ".$value."<br>";
        $ind++;
    }

    // Question 2 et 3
    echo "<br>Displaying the actual month:<br><br>";
    echo $moisFr[intval(date('m'))];


    // Question 4
    $newMoisFr2 = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 13=>'Juillet', 'Aout', 'Septembre',
        'Octobre', 'Novembre', 'Décembre');

    foreach($newMoisFr2 as $key => $val){
        echo "$val";
    }
    ?>
</body>

</html>