<?php

function buildProductsDisplay($products) {
    $pd = '<ul id="prod-display">';
    foreach ($products as $product) {
        $pd .= '<li>';
        $pd .= "<a href='/ACME/public_html/products/index.php?action=details&id=$product[invId]'><img src='$product[invThumbnail]' alt='Image of $product[invName] on Acme.com'>";
        $pd .= "<h2></h2>";
        $pd .= "<h2>$product[invName]</h2></a>";
        $pd .= "<span>$$product[invPrice]</span>";
        $pd .= '</li>';
    }
    $pd .= '</ul>';
    return $pd;
}

function checkEmail($clientEmail) {
    $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

// Check the password for a minimum of 8 characters,
// at least one 1 capital letter, at least 1 number and
// at least 1 special character
function checkPassword($clientPassword) {
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
    return preg_match($pattern, $clientPassword);
}

function buildProductsSelect($products) {
    $prodList = '<select name="invItem" id="invItem">';
    $prodList .= "<option>Choose a Product</option>";
    foreach ($products as $product) {
        $prodList .= "<option value='$product[invId]'>$product[invName]</option>";
    }
    $prodList .= '</select>';
    return $prodList;
}

function buildNav() {
    $categoriesAndIds = getCategoriesAndIds();
    $navList = '<ul>';
    $navList .= "<li><a href='/ACME/public_html/index.php' title='View the Acme home page'>Home</a></li>";
    foreach ($categoriesAndIds as $categoryAndId) {
        $navList .= "<li><a href='/acme/products/?action=category&type=$categoryAndId[categoryName]' title='View our $categoryAndId[categoryName] product line'>$categoryAndId[categoryName]</a></li>";
    }
    $navList .= '</ul>';
    return $navList;
}