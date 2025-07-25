<?php
// i want to end the session
session_start();
// Unset all session variables
session_unset();

session_destroy(); // Destroy the session
header("Location: http://localhost:3000/login.php"); // Redirect to login page

?>