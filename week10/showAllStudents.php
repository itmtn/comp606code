<?php

require_once("header.php");

$students = Student::getAll($mysqli);

echo "<table>\n";
foreach($students->getRecords() as $id => $student){
    echo "<tr>\n";
    echo "<td>".$student->getStudentId()."</td>\n";
    echo "<td>".$student->getName()."</td>\n";
    echo "<td><a href=\"showStudentDetail.php?id=".$student->getId()."\">View</a></td>\n";
    echo "</tr>\n";
}
echo "</table>\n";


require_once("footer.php");

?>

