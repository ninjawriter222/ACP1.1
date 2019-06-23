<?php
//Contains all the functions (for talking to database server)
function acmeConnect(){

    $server = "localhost";
    $database = "acme";
    $user = "iclient";
    $password = "Balloon222";
    $dsn = 'mysql:host='.$server.';dbname='.$database;

    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try{
    $acmeLink = new PDO($dsn, $user, $password, $options);
    return $acmeLink;
    }catch (PDOException $exc) {
    header('location: /acme/public_html/view/500.php');
    exit;
    }
}

$link = acmeConnect();
if(is_object($link)){
    echo '';
} else {
    echo 'no object';
}


