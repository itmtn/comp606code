<?php require("dbconnect.php"); ?>
<?php

$no = 7;
$name = "usb hub";
$description = "6 port powered usb hub";
$cost = 32.50;
$number_in_stock = 10;

$statement = $mysqli->prepare("INSERT INTO products(no, name, description,
  cost, number_in_stock) values(?, ?, ?, ?, ?)");


$statement->bind_param("issdi", $no, $name, $description, $cost, $number_in_stock);
$statement->execute();

if ($statement->affected_rows == 1){
  echo "<h3>Product Added</h3>";
}

$statement->close();

?>
