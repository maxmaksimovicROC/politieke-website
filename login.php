<!DOCTYPE html>
<html>
    <head>
       
        <title>login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"></link>
    </head>
    <body>
        <div class="container">
            <div class="Login-Box">
            <div class="row">
            <div class="col-md-6">
                <H2> Login hier </H2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <Label>username</Label>
                            <input type="text" name="user" class="form-control" required>
                            </div>
                        <div class="form-group">
                                <Label>password</Label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        <button type="submit" class="btn btn-primary"></button>
                    </form>
            </div> 
            </div> 
            </div>
            <div class="row">
            <div class="col-md-6">
            <div class="Register-Box"></div>
                    <H2> Registeer Hier </H2>
                        <form action="validation.php" method="post">
                            <div class="form-group">
                                <Label>username</Label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                    <Label>password</Label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            <button type="submit" class="btn btn-primary"></button>
                        </form>
            
                </div> 
                </div>  
                </div>    
        </div>  
   
   
   
   
   
   
            </body>
</html>