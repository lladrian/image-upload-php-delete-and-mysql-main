<?php
$servername = "sql213.epizy.com";
$username = "epiz_32586374";
$password = "RS0mv6XlQDR8r";

try {
  $conn = new PDO("mysql:host=$servername;dbname=epiz_32586374_new", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>