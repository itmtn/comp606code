<?php

$sql = "select * from products";

$result = $mysqli->query($sql);

$productsHTML = "";
while($row = $result->fetch_array(MYSQLI_NUM)){
$productsHTML .= <<<EOD
  <div class="product">
    <p>$row[0]</p>
    <p>$row[1]</p>
    <p>$row[2]</p>
    <p>$row[3]</p>
  </div>
EOD;
}

$result->close();

?>
