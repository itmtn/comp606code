<?php

error_reporting(0);

$user = "smdbuser";
$password = "pwd";
$database = "smdb";
$host = "localhost";

$mysqli = mysqli_connect($host, $user, $password, $database);
if ($mysqli == false){
  echo "<h1>unable to make database connection</h1>";
  exit(0);
}

$mysqli->autocommit(true);

error_reporting(E_ALL);

?>
