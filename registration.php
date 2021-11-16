<?php






$database_lokatie     = 'localhost';
$database_naam        = 'politiekewebsite';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';



    $conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker);
  // set the PDO error mode to exception
 
  $sql = "INSERT INTO  usertable (name, password)
  VALUES (user , password)";

   

  
?>
