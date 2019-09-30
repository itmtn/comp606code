<?php

require "libs/inc_classes.php";

$assignment = new Assignment("dynamic php aplication", "", 
    "2019-10-07", "2019-09-25");

// prove that assignment inherits from assessment
if (is_a($assignment, 'Assessment')){
    echo "assignment is an assessment";
    $assignment->debug();
}

// prove that test inherits from assessment
$test = new Test();
if (is_a($test, 'Assessment')){
    echo "test is an assessment";
    $test->debug();
}

?>