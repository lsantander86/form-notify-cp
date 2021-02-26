<?php
$servername = "mysql:host=localhost;dbname=came_pagos";
$username = "root";
$password = "";
$db = new PDO($servername, $username, $password);

try {
  $conn = $db;
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  //echo "Connection failed: " . $e->getMessage();
}
?>

