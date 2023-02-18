  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


  <div class="container-md text-dark">
    <form action="index.php" method="POST">
      <div class="d-flex flex-column align-items-center justify-content-evenly py-3 m-5">
        <label for="domaine" class="lead">Veuillez Choisir un domaine:</label>
        <select name="domaine" id="domaine">
          <?php $selected = $_POST['domaine'] ?? '';?>
          <option value="WEB" <?php if ($selected == "WEB") echo "selected"; ?>>WEB</option>
          <option value="DB" <?php if ($selected == "DB") echo "selected"; ?>>DB</option>
          <option value="RESEAU" <?php if ($selected == "RESEAU") echo "selected"; ?>>Réseau</option>
        </select>
        <input type="submit" class="btn btn-primary my-3" value="Submit">
      </div>
    </form>
  </div>

  <?php

  $arr = array(
    "WEB" => array(
      "PHP" => array("https://www.php.net/", "*****"),
      "HTML" => array("https://www.w3schools.com/html/default.asp", "****"),
      "JavaScript" => array("https://www.javascript.com/", "**"),
      "CSS" => array("https://www.w3schools.com/css/", "****"),
    ),
    "DB" => array(
      "MySQL" => array("https://www.mysql.com/", "*****"),
      "PostgreSQL" => array("https://www.postgresql.org/", "*****"),
      "Oracle" => array("https://www.oracle.com/", "****"),
      "DB2" => array("https://www.ibm.com/products/db2", "****"),
    )
  );

  if (!isset($_POST['submit'])) {
    $selected = $_POST['domaine'];
    echo "<div class='container-md text-center text-dark my-3 p-4'>";
    echo "<table class='table table-striped' border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>#</th>";
    echo "<th scope='col'>Language</th>";
    echo "<th scope='col'>URL</th>";
    echo "<th scope='col'>Reviews</th></tr>";
    echo "</thead>";
    $id = 1;
    foreach ($arr[$selected] as $lang => $value) {
      [$url, $review] = $value;
      echo "<tr>";
      echo "<td scope='row'>{$id}</td>";
      echo "<td>{$lang}</td>";
      echo "<td>{$url}</td>";
      echo "<td>{$review}</td>";
      echo "</tr>";
      $id++;
    }
    echo "</table>";
    echo "</div>";
  } else {
    echo "<p class='text-center text-danger'>Please choose a domain you are interested in!</p>";
  }

  ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>