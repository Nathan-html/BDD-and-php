<?php
//création de la BDD si elle n'existe pas 
try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
  $conn->exec($sql);
  echo "Database created successfully<br>";
} 
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;