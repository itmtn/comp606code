<?php

$sql = "select * from products";

$result = $mysqli->query($sql);

$productsHTML = "";
while($row = $result->fetch_array(MYSQLI_NUM)){
$productsHTML .= <<<EOD
  <div class="product">
    <p><a href="addToCart.php?product_no=$row[0]">$row[0]</a></p>
    <p>$row[1]</p>
    <p>$row[2]</p>
    <p>$row[3]</p>
    <form action="addToCart.php" method="post">
    <input type="hidden" name="pid" value="$row[0]">
    <input type="number" name="amount" value="0">
    <input type="submit" value="add to cart"> 
    </form>
  </div>
EOD;
}

$result->close();

?>
