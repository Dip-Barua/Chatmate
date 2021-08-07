<?php
  $hostname = "remotemysql.com";
  $username = "eR4XMrgkiv";
  $password = "Kg35sLa3Xe";
  $dbname = "eR4XMrgkiv";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
