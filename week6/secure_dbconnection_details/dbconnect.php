<?php

error_reporting(0);

// config.ini should not be stored in the htdocs folder
// config.ini should also be set as an exclusion using .gitignore
// so that it is never included in a source code repository
// see https://www.w3schools.com/php/func_filesystem_parse_ini_file.asp
// see https://www.atlassian.com/git/tutorials/saving-changes/gitignore

$config = parse_ini_file("config.ini");
var_dump($config);

$user = $config['user'];
$password = $config['password'];
$database = $config['database'];
$host = $config['host'];

$mysqli = mysqli_connect($host, $user, $password, $database);
if ($mysqli == false){
  header("location: sitedown.php");
}

$mysqli->autocommit(true);

error_reporting(E_ALL);

?>
