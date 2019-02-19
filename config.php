<?php
// Connect to the database
define('DB_SERVER', 'capstoneserver.mysql.database.azure.com:3306');
define('DB_USERNAME', 'mintdawn@capstoneserver');
define('DB_PASSWORD', 'Capstone!');
define('DB_NAME', 'mydb');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
