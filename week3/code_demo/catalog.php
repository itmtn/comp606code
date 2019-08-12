<?php require_once("shopping_cart.php"); ?>

<html>
<body>

<h1>Welcome to Proshop</h1>

<?php echo $cartStatus; ?>


<p>laptop  200.00</p>
<a href="addToCart.php?product_id=1">Add to Cart</a>




</body>
</html>

<?php  session_write_close(); ?>