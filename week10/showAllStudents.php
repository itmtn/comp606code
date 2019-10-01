<?php

require_once("header.php");

$students = Student::getAll($mysqli);

echo "<table>";
foreach($students->getRecords() as $id => $student){
    echo "<tr>";
    echo "<td>".$student->getStudentId()."</td>";
    echo "<td>".$student->getName()."</td>";
    echo "<td><a href=\"showStudentDetail.php?id=".$student->getId()."\">View</a></td>";
    echo "</tr>";
}
echo "</table>";


require_once("footer.php");

?>

