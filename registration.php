 <?php
require_once('config.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration from</title>
  <link rel="stylesheet" href="boot/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/registration.css">
</head>
<body>
  <div>
    <?php
    if(isset($_POST['create'])){
      $firstname    = $_POST['firstname'];
      $lastname     = $_POST['lastname'];
      $Email        = $_POST['Email'];
      $phonenumber  = $_POST['phonenumber'];
      $password     = $_POST['password'];

-
      $sql = "INSERT INTO users (firstname, lastname, Email, phonenumber, password) VALUES(?,?,?,?,?)";
       $stminsert = $db->prepare($sql);
       $result = $stminsert->execute([$firstname, $lastname, $Email, $phonenumber, $password]);    
        if ($result) {
          echo 'Account opgeslagen u kunt nu inloggen.';
        }else{
          echo 'Er ging iets fout probeer het opnieeuw.';
        }
    }
    ?>

  </div>
    <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="standpunt.php">Standpunten</a></li>
            <li><a href="politici.php">Politiek Juridisch</a></li>
            <li style="float:right"><a class="active" href="login.php">Login</a></li>
            
    </ul>
  <div>
    <form action="registration.php" method="post">
        <div class="container">


          <div class="row">
              <div class="col-sm-3">
              <h1>Registration</h1>
              <p>Vul uw informatie in</p>
              <hr class="mb-3">
              <label for="fisrtname"><b>Voornaam</b></label>
              <input class="form-control" type="text" placeholder=""required>

              <label for="lastname"><b>Achternaam</b></label>
              <input class="form-control" type="text" name="lastname" required>

              <label for="Email"><b>Email</b></label>
              <input class="form-control" type="email" name="Email" required>

              <label for="phonenumber"><b>Telefoon Nummer</b></label>
              <input class="form-control" type="text" name="phonenumber" placeholder="+31612345678" required>

              <label for="password"><b>Wachtwoord</b></label>
              <input class="form-control" type="password" name="password"  required>

              <hr class="mb-3">
              <input class="btn btn-primary" type="submit" name="create"  value="Sign Up">
              </div>

          </div>    
        </div>
    </form>
</div>



























</body>
</html>