<?php

require "libs/inc_classes.php";

// abstraction - using student object and its interface without needing to know internals of object

// create student object instance
// $mark = new Student("mark", "0214578", "mark@gmail.com", "1995-07-09");
$mark = Student::create("mark", "0214578", "mark@gmail.com", "1995-07-09");

// dump object instance
$mark->debug();

// call setter method - this will fail
if ($mark->setStudentId(958) == true){
    echo "successfully changed student id to 958";
}

// call setter method this will pass
if ($mark->setStudentId("94578124") == true){
    echo "successfully changed student id to 94578124";
}

// this will generate an error because name is a private property
$mark->name = "dave";

$mark->save();

?>