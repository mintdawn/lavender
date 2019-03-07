<?php
// Start the session and redirect people who aren't logged in.
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: redirect-nologout.php");
    exit;
} else {
// let the user logout
session_start();
$_SESSION = array();
session_destroy();
header("location: redirect.php");
exit;
}
?>
