<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body class="flex w-screen h-screen bg-white flex-col">

    <nav class="w-full bg-sky-500 flex justify-between items-center px-4 py-3">
        <span class="text-white font-bold text-xl">Dashboard</span>
        <a class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded" href="logout.php">Logout</a>
    </nav>

    <main class="flex flex-1 justify-center items-center">
        <h1 class="text-5xl font-bold text-gray-800">Halo, <?= htmlspecialchars($username) ?>!</h1>
    </main>

</body>
</html>
