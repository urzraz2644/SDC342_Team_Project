<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <h1>Admin Page</h1>
        <p>You are logged in as ADMIN.</p>
        <a href="logout.php">Logout</a>
</body>
</html>