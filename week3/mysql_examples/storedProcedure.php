<?php require("dbconnect.php"); ?>
<?php

$no = 7;
$name = "usb hub";
$description = "6 port powered usb hub";
$cost = 32.50;
$number_in_stock = 10;

$sql = "CALL spAddProduct($no, '$name', '$description', $cost,
$number_in_stock)";

if (!$mysqli->query($sql)){
  echo("failed to add product<br>");
  echo($mysqli->error);
} else {
  echo("success! product added");
}

?>
