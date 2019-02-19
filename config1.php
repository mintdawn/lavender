<?php
// this code is used to connect to the database.
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'unicorn_noodleview');
define('DB_PASSWORD', '-_4tTrR3LBbW');
define('DB_NAME', 'unicorn_learning');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
