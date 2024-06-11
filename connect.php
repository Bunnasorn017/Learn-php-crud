<?php 
  try {
    
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'datait';

  $conn = mysqli_connect($host, $user, $password, $database);
    
  } catch (PDOException $th) {
    echo "Error is " . $th;
  }
?>