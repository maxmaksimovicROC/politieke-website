<?php
?>



<!DOCTYPE html>
<html>
    <head>
       
        <title>login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    </head>
    <body>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="standpunt.php">Standpunten</a></li>
            <li><a href="politici.php">Politiek Juridisch</a></li>
            
        </ul>
        <div class="container">
            <form action="login.inc.php" method="post">
            <div class="row">
                <div class="col-sm-3">
                    <H1>Log In</H1>
                    <label for="Email"><b>Email</b></label>
                    <input class="form-control" type="email" name="Email" required>

                    <label for="password"><b>Wachtwoord</b></label>
                    <input class="form-control" type="password" name="password" required> 
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" name="submit" value="Sign In">   
                </div>
                </form>
            </div>
        </div>





        <p>als u geen account heeft klik dan hier <a href="registration.php"><button></button></a></p>
        
        
    </body>
</html>