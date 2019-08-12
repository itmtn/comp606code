<?php

require("dbconnect.php");
require("userdetails.php");
 

$sql = "select * from shopping_cart where customer_id = ".$_SESSION["customer_id"];
$result = mysqli_query($connection, $sql);

$row=mysqli_fetch_assoc($result);

$cartStatus = "your cart has ".$row["no_items_in_cart"]." items in it";


?>