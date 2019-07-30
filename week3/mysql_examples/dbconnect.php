<?php

error_reporting(0);

$user = "myprouser";
$password = "password";
$database = "proshop";
$host = "localhost";

$mysqli = mysqli_connect($host, $user, $password, $database);
if ($mysqli == false){
  header("location: sitedown.php");
}

$mysqli->autocommit(true);

error_reporting(E_ALL);

?>
