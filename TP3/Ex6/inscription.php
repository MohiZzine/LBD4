<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <?php 
  $nom = $prenom = $password = $confirm_password = $formations = "";
  $nomErr = $prenomErr = $passwordErr = $confirm_passwordErr = $formationsErr = $dateErr = "";

  // Form submit
  if (isset($_POST['submit'])) {
    // Validate nom
    if (empty($_POST['nom'])) {
      $nomErr = "Nom laissé vide!";
    } else {
      $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    
    // Validate prenom
    if (empty($_POST['prenom'])) {
      $prenomErr = "Prénom laissé vide!";
    } else {
      $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // Validate date
    if (isset($_POST['date'])) {
      if (strtotime($_POST['date']) > 0) {
        $date = $_POST['date'];
      } else {
        $dateErr = 'Date de naissance laissée vide!';
      }
    }
    
    // Validate mot de passe
    if (empty($_POST['password'])) {
      $passwordErr = "Mot de passe laissé vide!";
    } else {
      $password = filter_input(INPUT_POST, 'mot_passe', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // Validate confirmer mot de passe
    if (empty($_POST['confirm_password'])) {
      $confirm_passwordErr = "Confirmation de mot de passe laissé vide!";
    } else {
      $confirm_password = filter_input(INPUT_POST, 're-mot_passe', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // Validate formations
    if (empty($_POST['formations'])) {
      $formationsErr = "Vous devez selectionner au moins une case à cocher!";
    } else {
      $formations = $_POST['formations'];
    }

    // This is just for test
    // echo $nom;
    // echo $nomErr;
  }
  ?>
  <h2 class="text-center">Formulaire d'inscription</h2>
  <div class="container-fluid container-md">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" class="d-flex flex-column align-items-center justify-content-center" method="post">
      <label for="civil" class="form-label">Civilité</label>
      <select class="d-block mb-3" name="civil" id="civil">
        <option value="M" selected>M.</option>
        <option value="Mlle">Mlle.</option>
        <option value="Mme">Mme.</option>
      </select>
      <label for="nom" class="form-label">Nom</label>
      <input type="text" name="nom" id="nom" class="form-control w-50 <?php echo !empty($nomErr)? 'is-invalid': null; ?>" placeholder="Entrer votre nom">
      <?php if (!empty($nomErr)): ?>
        <p class="text-danger"><?php echo $nomErr; ?></p>
      <?php endif; ?>
      <label for="prenom" class="form-label">Prénom</label>
      <input type="text" name="prenom" id="prenom" class="form-control w-50 <?php echo !empty($prenomErr)? 'is-invalid': null; ?>" placeholder="Entrer votre prénom">
      <?php if (!empty($prenomErr)): ?>
        <p class="text-danger"><?php echo $prenomErr ?></p>
      <?php endif; ?>
      <label for="date_naissance" class="form-label">Date de naissance</label>
      <input type="date" name="date_naissance" id="date_naissance" class="form-control w-50 <?php echo !empty($dateErr)? 'is-invalid': null ?>" placeholder="Selectionnez votre date de naissance">
      <?php if(!empty($dateErr)): ?>
        <p class="text-danger"><?php echo $dateErr ?></p>
      <?php endif; ?>
      <div class="d-flex flex-row align-items-center justify-content-around">
        <label for="data" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="data" value="Data">Data</label>
        <label for="ml" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="ml" value="Machine Learning">Machine Learning</label>
        <label for="frontend" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="frontend" value="Front-end">Front-end</label>
        <label for="backend" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="backend" value="Backend">Backend</label>
        <label for="cybersecurity" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="cybersecutity" value="Cybersecurity">Cybersecurity</label>
        <label for="cloud" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="cloud" value="Cloud Computing">Cloud Computing</label>
        <label for="DevOps" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="DevOps" value="DevOps">DevOps</label>
        <label for="algorithm" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="algorithm"  value="Algorithms">Algorithms</label>
        <label for="data_structures" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="data_structures" value="Data Structures">Data Structures</label>
        <label for="databases" class="d-block m-1 p-3"><input type="checkbox" class="mx-2" name="formations[]" id="databases" value="Databases">Databases</label>
      </div>
      <?php if (!empty($formationsErr)): ?>
        <p class="text-danger"><?php echo $formationsErr ?></p>
      <?php endif; ?>
      <label for="pwd" class="form-label">Mot de passe</label>
      <input type="password" name="mot_passe" id="mot_passe" class="form-control w-50 <?php echo (!empty($passwordErr))? 'is-invalid': null?>" placeholder="Entrez votre mot de passe">
      <?php if (!empty($passwordErr)): ?>
        <p class="text-danger"><?php echo $passwordErr ?></p>
      <?php endif; ?>
      <label for="re-pwd" class="form-label">Confirmer le mot de passe</label>
      <input type="password" name="re-mot_passe" id="re-mot_passe" class="form-control w-50 <?php echo (!empty($passwordErr))? 'is-invalid': null ?>" placeholder="Confirmez votre mot de passe">
      <?php if (!empty($confirm_passwordErr)): ?>
        <p class="text-danger"><?php echo $confirm_passwordErr ?></p>
      <?php endif; ?>
      <input type="submit" value="Soumettre" name="submit" class="form-control btn btn-primary mt-3 w-25">
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>