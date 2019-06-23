<?php

$categories = getCategories();
//Build a navigation bar using the $categories array
$navList = '<ul id="page-nav">';
$navList .= "<li><a href='/ACME/public_html/index.php' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
    $navList .= "<li><a href='/ACME/public_html/index.php?action=" . urlencode
                    ($category['categoryName']) . "' title='View our $category[categoryName] "
            . "product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';
?>
