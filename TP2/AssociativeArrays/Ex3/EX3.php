<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <?php
    // Question 1
    $arr = array('Ahmed' => 14,
    'Jaoudia' => 19,
    'Samir' => 14,
    'Yasser' => 14.5,
    'Aya' => 12,
    'Ilham' => 16,
    'Yassine' => 17);

    // Question 2
    foreach($arr as $name => $grade) {
        echo "<p>Nom: {$name}, Note = {$grade} </p>";
    };
    // Question 3
    
    // Question 4
    arsort($arr); // Returns the sorted associative array by values in descending order
    foreach($arr as $name => $grade) { 
        // We only need the first element
        echo "<p>L\'etudiant ayant la note la plus elevee est: {$name}</p>";
        break;
    }
    // Question 5
    asort($arr); // Returns the sorted associative array by values in ascending order 
    foreach($arr as $name => $grade) {
         // We only need the first element
        echo "<p>L'etudiant ayant la note la note minimale est: {$name}</p>";
        break;
    }

    // Question 6
    $length = count($arr);
    $mean = 0;
    foreach($arr as $name => $grade) {
        $mean += $grade;
    }
    $mean /= $length;
    $roundedMean = round($mean, 2);
    echo "<p>La moyenne de la classe est: $roundedMean</p> ";
    
    ?>
</body>
</html>