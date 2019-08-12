<?php
require_once("dbconnect.php");
require_once("userdetails.php");

if (array_key_exists("product_id", $_GET) == false) {
    header("location: catalog.php");
}

$productId = $_GET["product_id"];

// check to see if there is the same product is already in customers cart
// if it is then we need to do an sql update not an insert

$sql = "insert into shopping_cart_items(customer_id, product_id, amount)";
$sql = $sql." values(".$_SESSION["customer_id"].", ".$productId.", 1)";

$result = mysqli_query($connection, $sql);

// update cart table to reflect new amount of items
$sql = "select * from shopping_cart where customer_id=".$_SESSION["customer_id"];
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$amount = (int)$row['no_items_in_cart'];
$amount = $amount + 1;

$sql = "update shopping_cart set no_items_in_cart = ".
        $amount." where customer_id = ".$_SESSION["customer_id"];

var_dump($sql);



?>