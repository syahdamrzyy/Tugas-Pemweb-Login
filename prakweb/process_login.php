<?php
session_start();
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    $_SESSION["username"] = $user["username"];
    header("Location: home.php");
    exit;
} else {
    echo '<script>alert("Login gagal!"); window.location.href="index.php";</script>';
    exit;
}
?>
