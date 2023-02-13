<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 4</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <h2>Table de multiplication</h2>
  <table border="1" class="table">

  <?php

    echo '<tr>';
    echo '<td class="orange-red"></td>';
    for($i = 2; $i <= 10; $i++){
        echo '<td class="orange-red">'.$i.'</td>';
    }
    echo '</tr>';

    
    for($i = 2; $i<=10; $i++){
        if($i%2 == 0){
            echo '<tr>';

            echo '<td class="orange-red">'.$i.'</td>';
            for($j = 2; $j<= 10; $j++){
                echo '<td class="yellow">'.($j * $i).'</td>';
            }
            echo '</tr>';

        }
        else{

            echo '<tr>';

            echo '<td class="orange-red">'.$i.'</td>';
            for($j = 2; $j<= 10; $j++){
                echo '<td class="orange">'.($j * $i).'</td>';
            }
            echo '</tr>';

        }
        

    }
  ?>


  </table>
</body>
</html>