<?php

$color = array("red", "blue", "green", "gold", "yellow");
$names = array("mikaere", "lisa", "shona", "willie", "rachel");

echo "<ol>";
for($i = 0; $i < 5; $i++){
    echo "<li style=\"color: ".$color[$i]."\">".$names[$i]."</li>";
}
echo "</ol>";



?>

