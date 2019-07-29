<?php
session_start();

// $_POST will contain the input field data. this page expects to be run as a result of the 
// form operation in page1.php.  however we can check to see if $_POST contains anything
// and if it doesn't we redirect the user back to the preference form on page1.php and end
// execution of this page using the exit() function
// otherwise we save our preferences supplied in $_POST and store them as session variables
// we then redirect the user to page2.php by generating an http header that the browser will
// recognise 

if (count($_POST) == 0) {
    header("Location: page1.php");
    exit(0);
};

$_SESSION['backgroundColor'] = $_POST['backgroundColor'];
$_SESSION['headingColor'] = $_POST['headingColor'];


session_write_close();

header("Location: page2.php");

?>