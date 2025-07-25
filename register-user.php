<?php
session_start();
$m_mail = $_POST["m_mail"];
$pass = $_POST["password"];
$name = $_POST["fullname"];
$usrname = $_POST["username"];

//connect to database
include 'config.php';

//query to insert data
$query = "INSERT INTO users (m_mail, password, fullname, username) VALUES ('$m_mail', '$pass', '$name', '$usrname')";



// execute the query
mysqli_query($conn, $query);


// jb tumna backend ma data insert kr dia insert krna ka badh tum user to ticket pakra do
$_SESSION['ticket'] = $usrname;


header("Location:http://localhost:3000/index.php");
?>