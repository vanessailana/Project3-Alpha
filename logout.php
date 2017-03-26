<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
header("location:login2.php");
session_destroy();   /* Redirect to login page */
exit();
?>