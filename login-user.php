<?php
session_start();
include 'config.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Query: username ya email dono check ho
// isma wohi bnda login hoga jo pehly sa register hua hoga mtlb uska username ya email or password database me hoga
$query = "SELECT * FROM users WHERE (username='$username' OR m_mail='$username') AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['ticket'] = $username;
    header("Location: http://localhost:3000/index.php");
    exit;
} else {
    header("Location: login.php?error=1");
    exit;
}
?>