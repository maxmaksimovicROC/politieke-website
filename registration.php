<?php


session_start();



$database_lokatie     = 'localhost';
$database_naam        = 'politiekewebsite';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

    $name = $_POST['user'];
    $pass = $_POST['password'];
    
    $s = "select * from usertable where name = '$name'";
    
    

     

    if($num ==1){
        echo"Username Already Taken";
    }else{
        $reg=" insert into usertable(name, password) values ('$name','$pass')";
    
        echo"Registration Succesful";
    }


?>
