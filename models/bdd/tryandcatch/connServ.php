<?php
try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec($sql);
} 
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;