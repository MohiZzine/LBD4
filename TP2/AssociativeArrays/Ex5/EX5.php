<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5</title>

</head>
<body>
    <?php 

    // Question 1
    $capitals = array('Maroc' => 'Rabat',
    'Allemagne' => 'Berlni',
    'Serbie' => 'Belgrade',
    'Bresil' => 'Brasilia',
    'Slovaquie' => 'Bratislava',
    'Italie' => 'Rome',
    'Venezuela' => 'Caracas',
    'Moldavie' => 'Chisinau',
    'Guyana' => 'Georgetown', 
    'Viet Nam' => 'Hanoi',
    'Zimbabwe' => 'Harare',
    'Cuba' => "La Havane",
    'Pays-Bas' => 'La Haye',
    'Finlande' => 'Helsinki');

    print_r($capitals);

    // Question 2


    echo '<table border="1">';
    echo '<tr><th>Country</th><th>Capital</th></tr>';
    foreach($capitals as $key => $value){
        echo '<tr>';
        echo '<td>'.$key.'</td>';
        echo '<td>'.$value.'</td>';
        echo '</tr>';
    }
    echo '</table>';

    ?>


    <br>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <br>
    <div class="flex-container">
        <input type="text" name="test" id="test" /><br/>
        <input type="submit" name="submit" id="submit">
    </div>
    </form>

    <?php
    
    // Question 3
    if ($_POST['submit']) {
        if(array_key_exists('test',$_POST)){
            $a = $_POST['test'];
            if(array_key_exists($a, $capitals)){
                echo "The capital of the country is:  $capitals[$a]";
            } else{
                echo "This capital is not in available..";
            }
        }
    }

    ?>
</body>
</html>