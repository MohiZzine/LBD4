<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destination Page | Ex3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="m-3">
  <h2>Destination Page</h2>
  <?php
  if (isset($_POST['submit'])) {
    $style_in = "";
    $style_out = "</span>";
    ['fname' => $fname, 'lname' => $lname, 'email' => $email, 'object' => $object, 'message' => $message] = $_POST;
    echo "<p>Hello <span class='text-primary'>{$fname} {$lname}</span>, your email is <span class='text-primary'>{$email}</span>.</p>";
    echo "<p>You just sent an email with object: <span class='text-primary'>{$object}</span>.</p>";
    echo "<p>The message is: </p>";
    echo "<p><span class='text-primary'>{$message}</span></p>";
    // else {
    //   echo "Please select the object of your message!";
    //   header('Location: index.php');
    // }
  }
?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>