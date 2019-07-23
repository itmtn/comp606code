<?php

$var1 = "tar";
$var2 = "cat";

for($i = 0; $i < strlen($var1); $i++){
    $ch = $var1[$i];

    $found = false;
    for($n = 0; $n < strlen($var2); $n++){
        if ($ch == $var2[$n]){
            $found = true;
            break;
        }
    }
    if ($found == false){
        break;
    } 
}
if ($found) {
    echo "is an anagram";
} else {
    echo "nah";
}


?>