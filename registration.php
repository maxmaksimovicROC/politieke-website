<?php






$database_lokatie     = 'localhost';
$database_naam        = 'politiekewebsite';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';


try{
    $database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO  usertable (name, password)
  VALUES ('','')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New account created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
