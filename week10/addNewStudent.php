<?php

require_once("header.php");

$newStudent = Student::create($mysqli, $_POST['name'], $_POST['studentId'], $_POST['email'], $_POST['dateOfBirth']);

if (is_null($newStudent)){
    "<h2>failed to create new student</h2>";
} else {
    echo "<h2>New Student Created</h2>";
    echo "<p><a href=\"showallStudents.php\">show all students</a></p>";
}


require_once("footer.php");

?>