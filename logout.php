<?php
// let the user logout
session_start();
$_SESSION = array();
session_destroy();
header("location: redirect.php");
exit;
?>
