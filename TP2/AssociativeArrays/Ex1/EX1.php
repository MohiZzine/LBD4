<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php
    $ages = array('Ahmed' => 34, 'Ikram' => 19, 'Imane' => 24);
    foreach($ages as $person => $age) {
        echo "<p>{$person} a hhh{$age} ans.</p>";
    }
    ?>
</body>
</html>