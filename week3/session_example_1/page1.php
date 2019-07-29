<?php 

// require will include and execute all the code in the referenced file
// if the file cannot be found require_once will generate an error
// the referenced file will only every be included once into this page
require_once("header.php"); 

?>

<h1 class="padder"><?php echo basename(__FILE__, ".php"); ?></h1>

<?php 

// include will include and execute all code in the referenced file
// however if the file cannot be found it will not generate an error
include("nav.php"); 
?>

<?php

// create a session based array and also create a simple array.  
// $items is destroyed when this php page has been processed by the 
// php interpreter.  $_SESSION array will be saved - see footer.php
// therefore $_SESSION variables last for the users browser session and 
// are destroyed when the browser is closed

$_SESSION['items'] = array("apple", "orange", "pear");

$items = array("apple", "orange", "pear");

echo "<div class=\"container-fluid\"><pre><code>";

var_dump($_SESSION['items']);
var_dump($items);

echo "</pre></code></div>";

?>

<?php require_once("footer.php"); ?>