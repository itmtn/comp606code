<?php require_once("header.php"); ?>

<h1 class="padder"><?php echo basename(__FILE__, ".php"); ?></h1>

<?php include("nav.php"); ?>

<?php

echo "<div class=\"container-fluid\"><pre><code>";

var_dump($_SESSION['items']);
var_dump($items);

echo "</pre></code></div>";

?>

<?php require_once("footer.php"); ?>