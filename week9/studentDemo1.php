<?php

require "libs/inc_classes.php";

// create a new student object variable using constructor
$mark = new Student("mark", "02145780", "mark@gmail.com", "2019-07-23");

// using the public setter method to set the studentId property and echoing the result
echo $mark->setStudentId("00724875");

// student id is a private property so this will generate an error
$mark->studentId = "00724";

?>