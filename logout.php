<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
header("location:login2.php");  /* Redirect to login page */
exit;
?>