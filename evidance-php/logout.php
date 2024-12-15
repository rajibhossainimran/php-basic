<?php 
session_start();
unset($_SESSION["my_session"]);
session_destroy();
header("location:login.php");
?>