<!DOCTYPE html>
<html>
<head>
  <title>Registration from</title>
  <link rel="stylesheet" href="boot/css/bootstrap.min.css">
</head>
<body>
  <div>
    <?php
    if(isset($_POST['create'])){
      echo 'account gemaakt.';
    }
    ?>

  </div>
  <div>
    <form action="registration.php" method="post">
        <div class="container">


          <div class="row">
              <div class="col-sm-3">
              <h1>Registration</h1>
              <p>Vul uw informatie in</p>
              <hr class="mb-3">
              <label for="fisrtname"><b>Voornaam</b></label>
              <input class="form-control" type="text" name="firstname" required>

              <label for="lastname"><b>Achternaam</b></label>
              <input class="form-control" input type="text" name="lastname" required>

              <label for="Email"><b>Email</b></label>
              <input class="form-control" input type="email" name="Email" required>

              <label for="telnum"><b>Telefoon Nummer</b></label>
              <input class="form-control" input type="text" name="telnum" required>

              <label for="password"><b>Wachtwoord</b></label>
              <input class="form-control" input type="password" name="password" required>

              <hr class="mb-3">
              <input class="form-control" input type="submit" name="create" value="Sign Up">
              </div>

          </div>    
        </div>
    </form>
</div>

</body>
</html>