<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <h2 class="m-3 text-center font-weight-bold">Email submission form</h2>
  <form action="destination.php?submitsucceeded" method="post">
      <div class="d-flex text-center flex-column align-items-center justify-content-center py-4">
        <label for="lname" class="d-block">Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="Your last name here" required>
        <label for="lname" class="d-block">First Name</label>
        <input type="text" name="fname" id="fname" placeholder="Your first name here" required>
        <label for="email" class="d-block">Email</label>
        <input type="email" name="email" id="email" placeholder="Your email here" required>
        <div class="">
          <label for="object" class="d-block">Object: </label>
          <input type="radio" name="object" id="after_sale" value="After Sale" required><label class="p-2" for="after_sale">After Sale</label>
          <input type="radio" name="object" id="technical" value="Technical"><label class="p-2" for="technical">Technical</label>
        </div>
        <label for="message" class="d-block">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <input type="submit" value="Submit" name="submit" class="d-block btn btn-primary my-3 px-4">
    </div>
  </form>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>