
<nav class="navbar navbar-expand-lg  bg-light">
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav mr-auto">
<?php

// create a navigation bar using bootstrap see https://getbootstrap.com/docs/4.0/components/navbar/
// generate navigation hyperlinks for pages using $pages array
// basename will get the name of the page without the file extension
// note foreach loop for accessing individual items in the array
// this will get a read only reference to each item in the array
// in order to be able to write to each item you must use foreach($pages as &$page) to create a reference
// see https://www.php.net/manual/en/control-structures.foreach.php

$pages = array("page1.php", "page2.php", "page3.php", "page4.php", "page5.php");
foreach($pages as $page){
    echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"".$page."\">".basename($page, ".php") ."</a></li>\n";
}
?>
</ul>
</div>
</nav>