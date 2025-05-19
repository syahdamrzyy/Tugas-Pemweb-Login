<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>INI FORM POST</h2>
    <form method="POST" action="process_login.php">
        <input name="username" type="text" placeholder="Masukan Username" required />
        <input name="password" type="password" placeholder="Masukan Password" required />
        <button type="submit">SUBMIT</button>
    </form> 
</body>
</html>
