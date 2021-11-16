<!DOCTYPE html>
<html>
    <head>
       
        <title>login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"></link>
    </head>
    <body>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="standpunt.php">Standpunten</a></li>
            <li><a href="politici.php">Politiek Juridisch</a></li>
            
        </ul>
    
        <div class="container">
            
            <div class="row">
            <div class="col-md-6">
            
                <H2> Login hier </H2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <Label>username</Label>
                            <input type="text" name="nm" class="form-control" required>
                            </div>
                        <div class="form-group">
                                <Label>password</Label>
                                <input type="password" name="psswrd" class="form-control" required>
                            </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
        </div>
        </div> 
        <p>als u geen account heeft klik dan hier <a href="registration.php">*</a></p>
        
        
    </body>
</html>