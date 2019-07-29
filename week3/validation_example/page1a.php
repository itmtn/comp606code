<?php
session_start();

if (count($_POST) == 0) {
    header("Location: page1.php");
    exit(0);
};

// check that all the data we expect to have been sent from the form
// actually exists in the form

$valid = true;
$keys = array("name", "dateOfBirth", "undergraduateDegrees");
foreach($keys as $key){
    if (!array_key_exists($key, $_POST)){
        $valid = false;
    }
}

if ($valid == false){
    header("location: page1.php");
    exit(0);
}

// now write code to do something with form data in $_POST here


session_write_close();

header("Location: page2.php");

?>