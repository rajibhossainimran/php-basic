<?php

session_start(); // Start the session

// Destroy all session variables
unset($_SESSION['myName']);

// Destroy the session itself
session_destroy();

// Redirect to the login page
header("Location: login.php");
exit();



?>