<?php

require_once("header.php");

if(array_key_exists("id", $_GET) == false){
    header("location:showAllStudents.php");
    exit(0);
}

$student = Student::find($mysqli, $_GET['id']);

echo "<h2>Student Details</h2>";
echo "<p>Name: ".$student->getName()."</p>";
echo "<p>Student ID:".$student->getStudentId()."</p>";
echo "<p>Email: ".$student->getEmail()."</p>";
echo "<p>Date of Birth: ".$student->getDob()->format('d-m-Y')."</p>";

echo "<p><a href=\"showAllStudents.php\">Show All Students</a></p>";

require_once("footer.php");

?>

