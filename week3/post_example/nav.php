
<nav class="navbar navbar-expand-lg  bg-light">
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav mr-auto">
<?php

$pages = array("page1.php", "page2.php", "page3.php");
foreach($pages as $page){
    echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"".$page."\">".basename($page, ".php") ."</a></li>\n";
}
?>
</ul>
</div>
</nav>