<?php require("dbconnect.php"); ?>
<?php

echo "<h3>*** DATABASE SEEDER RUNNING ***</h3>";
echo "creating table products ...<br>";

$mysqli->query("DROP TABLE IF EXISTS products");

$sql = <<<EOD
CREATE TABLE `products`(
  `no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cost` decimal(7,2) NOT NULL,
  `number_in_stock` int(11) NOT NULL
  )
EOD;

$mysqli->query($sql);

echo "populating table products ...<br>";

$sql = <<<EOD
INSERT INTO `products` (`no`, `name`, `description`, `cost`, `number_in_stock`) VALUES
(1, 'bat laptop', 'batmans laptop', '450.00', 5),
(2, 'super laptop', 'supermans laptop', '250.00', 2),
(3, 'x mouse', 'wireless mouse', '2.50', 15),
(4, 'y mouse', 'chord based mouse', '1.50', 4),
(5, 'tablet 1', 'blue tablet', '450.00', 5),
(6, 'tablet 2', 'green tablet', '450.00', 5);
EOD;

$mysqli->multi_query($sql);

echo "retrieving tables in $database ...<br>";

$result = $mysqli->query("SHOW TABLES");
while($row = $result->fetch_row()){
  echo $row[0];
}

echo "<h3>*** DATABASE SEEDER FINISHED ***</h3>";

?>
