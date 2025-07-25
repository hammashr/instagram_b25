<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "instagram";


$conn = mysqli_connect($hostname, $username, $password, $db) or die();
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>