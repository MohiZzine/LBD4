<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 7</title>
</head>
<body>
Exercice 7:

                
  <?php
    
    $codes = array("Et123" => array("AB", "AC", 17),
                    "Et676" => array("BC", "BD", 12),
                    "Et998" => array("CD", "CE", 9),
                    "Et764" => array("DE", "DF", 16.5),);

    // Question 1
    foreach($codes as $key => $val){
        echo "Code : ".$key." Nom : ".$val[0]." Prenom : ".$val[1]." Moyenne : ".$val[2]."<br>";
    }

    // Question 2

    $indx = "Et123";
    foreach($codes as $key => $val){
        if($val[2] > $codes[$indx][2]){
            $indx = $key; 
        }
    }
    echo "<p>L'etudiant ayant la note la plus élevée : </p>";
    echo "Code : ".$indx." Nom : ".$codes[$indx][0]." Prenom : ".$codes[$indx][1]." Moyenne : ".$codes[$indx][2]."<br>";


    // Question 3

    $stud = 0;
    foreach($codes as $key => $val){
        if($val[2] >= 10){
            $stud = $key;
            break;
        }
    }

    foreach($codes as $key => $val){
        if( $val[2] > 10 and ($val[2] < $codes[$stud][2])){
            $stud = $key; 
        }
    }
    echo "<p>L'étudiant ayant la note min mais qui a validé l'année est: </p>";
    echo "Code : ".$stud." Nom : ".$codes[$stud][0]." Prenom : ".$codes[$stud][1]." Moyenne : ".$codes[$stud][2]."<br>";

    
    // Question 4

    echo "<p>Le(s) étudiant(s) n'ayant pas validé l'année:</p>";
    foreach($codes as $key => $val){
        if($val[2] < 10){
            echo "$key, ";
        }
    }

    ?>
</body>
</html>