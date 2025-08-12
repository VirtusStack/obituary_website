<?php
$host = "localhost";     
$dbname = "obituary_db";
$username = "root";       
$password = "admin123";          

// Create connection
try {
     $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die("DB Connection failed: " . $e->getMessage());
  }
?>