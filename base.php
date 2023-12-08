<?php
$server = "localhost"; // Change to dc2
$user = "root"; // Change to user2p
$pass = ""; // Change to Koszalin23
$dbname = "pizza_kaftan";

try {
  $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo $e->getMessage();
}
?>