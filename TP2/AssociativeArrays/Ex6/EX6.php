<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        $arr = array(
            "WEB" => array("PHP" => array("https://www.php.net/", "*****"),
                            "HTML" => array("https://www.w3schools.com/html/default.asp", "****"),
                            "JavaScript" => array("https://www.javascript.com/", "**"),
                            "CSS" => array("https://www.w3schools.com/css/", "****"),
            ),
            "DB" => array("MySQL" => array("https://www.mysql.com/", "*****"),
                            "PostgreSQL" => array("https://www.postgresql.org/", "*****"),
                            "Oracle" => array("https://www.oracle.com/", "****"),
                            "DB2" => array("https://www.ibm.com/products/db2", "****"),
            )
        );

        // Question 1
        echo '<br>';
        foreach($arr as $field => $table){
            echo '<span class="header">'.$field.'</span>';
            echo '<br>';
            foreach($table as $lang => $url){
                echo $lang.', ';
            }
            echo '<br>';
        }


        // Question 2 and 3
        echo '<p>Suggested websites per category sorted by reviews: </p>';

        foreach($arr as $key => $value){
            echo '<span class="header">'.$key.'</span>';
            echo '<br>';
            
            // 
            foreach($value as $key => $url){
                if(strlen($url[1]) == 5){
                    echo $key.', ';
                    echo '<br>';
                }
            }
            
            foreach($value as $key => $url){
                if(strlen($url[1]) == 4){
                    echo $key.', ';
                    echo '<br>';
                }
            }
            
            foreach($value as $key => $url){
                if(strlen($url[1]) == 3){
                    echo $key.', ';
                    echo '<br>';
                }
            }
            
            foreach($value as $key => $pal){
                if(strlen($pal[1]) == 2){
                    echo $key.', ';
                    echo '<br>';
                }
            }
            
            foreach($value as $key => $pal){
                if(strlen($pal[1]) == 1){
                    echo $key.', ';
                    echo '<br>';
                }
            }
        
            echo '<br>';
        }

    ?>
</body>
</html>