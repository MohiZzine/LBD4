<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Achat Immobilier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php
      // Calculate the rate
      
      
      $nom = $prenom = $montant = $duree = '';
      $nomErr = $prenomErr = $montantErr = $dureeErr = '';
      if (isset($_POST['submit'])) {
        
        // Validate 'nom'
        if (empty($_POST['nom'])) {
          $nomErr = 'Veuillez tapez votre nom!';
        } else {
          $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        
        // Validate 'prenom'
        if (empty($_POST['prenom'])) {
          $prenomErr = 'Veuillez taper votre prenom!';
        } else {
          $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        
        // Validate 'montant'
        if (empty($_POST['montant'])) {
          $montantErr = 'Veuillez taper votre montant!';
        } else {
          $montant = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_NUMBER_FLOAT);
        }
        
        // Validate 'duree'
        if (empty($_POST['duree'])) {
          $dureeErr = 'Veuillez entrer votre durée!';
        } else {
          $duree = filter_input(INPUT_POST, 'duree', FILTER_SANITIZE_NUMBER_INT);
        }
      }
  ?>
  <h2 class="text-center">Formulaire d'achat immobilier</h2>
  <form class="d-flex flex-column align-items-center justify-content-center" action="" method="post">
    <select name="fonction" id="fonction" class="mb-2">
      <option value="salarie">Salarié</option>
      <option value="fonctionnaire">Fonctionnaire</option>
      <option value="liberale">Profession Libérale</option>
    </select>
    <label for="nom" class="form-label">Nom</label>
    <input type="text" name="nom" id="nom" class="form-control w-25 <?php echo !empty($nomErr)? 'is-invalid': null; ?>" placeholder="Entrez votre nom">
    <?php if (!empty($nomErr)) : ?>
      <p class="text-primary"><?php echo $nomErr ?></p>
    <?php endif; ?>
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" name="prenom" id="prenom" class="form-control w-25 <?php echo (!empty($prenomErr)) ? 'is-invalid': null; ?>" placeholder="Entrez votre prenom">
    <?php if (!empty($prenomErr)) : ?>
      <p class="text-primary"><?php echo $prenomErr ?></p>
    <?php endif; ?>
    <label for="montant" class="form-label">Montant de financement</label>
    <input type="number" name="montant" id="montant" min="0" step="0.001" class="form-control w-25 <?php echo (!empty($montantErr)) ? 'is-invalid': null; ?>" placeholder="Entrez votre montant">
    <?php if (!empty($montantErr)) : ?>
      <p class="text-primary"><?php echo $montantErr ?></p>
    <?php endif; ?>
    <label for="duree" class="form-label">Durée en mois</label>
    <input type="number" name="duree" id="duree" min="6" step="1" max="300" class="form-control w-25 <?php echo (!empty($dureeErr)) ? 'is-invalid': null; ?>" placeholder="Entrez la duree (entre 6-300 mois)">
    <?php if (!empty($dureeErr)) : ?>
      <p class="text-primary"><?php echo $dureeErr ?></p>
    <?php endif; ?>
    <div class="assurance d-flex my-3">
      <input type="checkbox" class="mx-3" name="assurance" id="assurance" checked>
      <label for="assurance" class="form-label">Voulez-vous bénéficier d'une assurance ?</label>
    </div>
    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
  </form>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>