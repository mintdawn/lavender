<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'unicorn_noodleview');
define('DB_PASSWORD', '-_4tTrR3LBbW');
define('DB_NAME', 'unicorn_learning');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>