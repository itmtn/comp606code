

<?php

If (array_key_exists('username', $_POST)) {
	echo "hello ".$_POST['username'];
} else {
	header('location: http://www.google.com');
}

?>

