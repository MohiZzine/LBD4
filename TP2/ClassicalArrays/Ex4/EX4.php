<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 4</title>
</head>

<body>
  <?php
    echo "<br>on considere le tableau suivant : <br>";
    $arr = array(13, 140, 141, 318, 197, 189, 112, 20, 130, 8, 192, 19, 9, 317, 210);

    display($arr);

    function rtrier(array $a){
        for($i = 0; $i < count($a); $i++){
            $inter = $i;
            for($j = $i; $j < count($a); $j++){
                if($a[$inter] < $a[$j]){
                    $inter = $j;
                }
            }
            $tmp = $a[$i];
            $a[$i] = $a[$inter];
            $a[$inter] =  $tmp;
        }

        return $a;
    }
    

    echo "<br>After sorting the array we get :<br>";
    display(rtrier($arr));
  ?>
</body>

</html>