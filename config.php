<?php
global $BASE_URL;
global $CON;
$BASE_URL="http://localhost/ebook/";


$host= 'localhost';
$user = 'root';
$pass = '';
$database='ebook';


//connect to mysql server
$CON=mysqli_connect($host, $user, $pass, $database);

// Check connection
if (!$CON)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>