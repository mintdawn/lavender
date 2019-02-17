<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'capstoneserver.mysql.database.azure.com:3306');
define('DB_USERNAME', 'mintdawn@capstoneserver');
define('DB_PASSWORD', 'Capstone!');
define('DB_NAME', 'mydb');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
