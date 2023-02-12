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
    $tab=array("PHP"=>"http://www.php.net","MySQL"=>"http://www.mysql.o
    rg","SQLite"=>"http://www.sqlite.org","HTML"=>"https://www.w3schools.com/html/default.as
    p","CSS"=>"https://www.w3schools.com/css/default.asp");

    $ind = 0;
    $num = count($tab); // $num = 5
    // Without the (optional) number parameter
    while($ind < $num) {
            $key = array_rand($tab);
            echo "<p>The external link to {$key} is <a href='{$tab[$key]}'>{$tab[$key]}</a>. </p>";
            $ind++;
        };
        
    echo "<p>================================================</p>";
    // With the number parameter
    $array_of_keys = array_rand($tab, $num);
    print_r($array_of_keys);

    foreach($array_of_keys as $key) {
        echo "<p>The external link to {$key} is <a href='{$tab[$key]}'>{$tab[$key]}</a>. </p>";
    };

    ?>
</body>
</html>