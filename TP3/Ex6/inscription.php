<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription | Exercise 6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <h2 class="m-3 font-weight-bold text-center">Inscription</h2>
  <div class="text-center p-3 m-2">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <label class="d-block m-1" for="civi">Civilité:</label>
        <select name="civil" id="civil">
          <option value="Mlle">Mlle.</option>
          <option value="Mme">Mme.</option>
          <option value="M." selected>M.</option>
        </select>
        <label class="d-block m-1" for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($nom ?? ''); ?>">
        <?php if (!empty($error) && empty($nom)) { ?>
          <span class="text-danger"><?php echo $error; ?></span>
        <?php } ?>
        <label for="prenom" class="d-block m-1">Prénom:</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($prenom ?? ''); ?>">
        <?php if (!empty($error) && empty($prenom)) { ?>
          <span class="text-danger"><?php echo $error; ?></span>
        <?php } ?>
        <label for="birthdate" class="d-block m-1" >Date de naissance</label>
        <input type="date" name="bithdate" id="birthdate" value="<?php htmlspecialchars($birthdate ?? ''); ?>">
        <label for="formations" class="d-block m-1">Formation:</label>
        <div class="d-flex flex-row align-items-center justify-content-between">
          <label for="data" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="data" <?php if (isset($formations[0])) {echo 'checked';}?>>Data</label>
          <label for="ml" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="ml" <?php if (isset($formations[1])) {echo 'checked';} ?>>Machine Learning</label>
          <label for="frontend" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="frontend" <?php if (isset($formations[2])) {echo 'checked';} ?>>Front-end</label>
          <label for="backend" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="backend" <?php if (isset($formations[3])) {echo 'checked';} ?>>Backend</label>
          <label for="cybersecurity" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="cybersecutity" <?php if (isset($formations[4])) {echo 'checked';} ?>>Cybersecurity</label>
          <label for="cloud" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="cloud" <?php if (isset($formations[5])) {echo 'checked';} ?>>Cloud Computing</label>
          <label for="DevOps" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="DevOps" <?php if (isset($formations[6])) {echo 'checked';} ?>>DevOps</label>
          <label for="algorithm" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="algorithm" <?php if (isset($formations[7])) {echo 'checked';} ?>>Algorithms</label>
          <label for="data_structures" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="data_structures" <?php if (isset($formations[8])) {echo 'checked';} ?>>Data Structures</label>
          <label for="databases" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="databases" <?php if (isset($formations[9])) {echo 'checked';} ?>>Databases</label>
          <?php if (!$checked) {?>
            <span class="text-danger"><?php echo $error ?></span>
          <?php } ?>
        </div>
        <label for="password" class="d-block">Mot de passe:</label>
        <input type="password" name="password" id="password" value="<?php echo htmlspecialchars($password ?? ''); ?>">
        <?php if (!empty($error) && empty($password)) { ?>
          <span class="text-danger"><?php echo $error ?></span>
        <?php } ?>
        <label for="confirm_password">Récrire mot de passe:</label>
        <input type="password" name="confirm_password" id="password" value="<?php echo htmlentities($confirm_password ?? ''); ?>">
        <?php if (!empty($error)) {?>
          <span class="text-danger"><?php echo $error ?></span>
        <?php } ?>
        <input type="submit" class="m-4 btn btn-primary" name="submit" value="Calculate">
      </div>
    </form>
  </div>

  <?php
    if (isset($_POST['submit'])) {
      ['civil' => $civil, 'prenom' => $prenom, 'nom' => $nom, 'birthdate' => $birthdate, 'formations' => $formations, 'password' => $password, 'confirm_password' => $confirm_password] = $_POST;
      $error = '';

      if (empty($name)) {
        $error = 'Nom laissé vide';
      }

      if (empty($prenom)) {
        $error = 'Prenom laissé vide';
      }

      else if (empty($password)) {
        $error = 'Mot de passe laissé vide';
      }

      else if ($password !== $confirm_password) {
        $error = 'Mots de passes non identiques';
      }

      $checked = 0;
      for($i = 0; $i < 10; $i++) {
        if (isset($formations[$i])) {
          $checked = true;
          break;
        }
      }
      if (!$checked) {
        $error = 'Veuillez selectionner au moins une formation à cocher..';
      }
    }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>