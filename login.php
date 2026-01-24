<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // TEMP login for assignmment
    $_SESSION['user_id'] = 1;
    $_SESSION['role'] = 'admin'; // change to 'user' to test
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<<head>
    <title>Login</title>
</head>
<body>
    
<h2>Login</h2>
    
<form method="post">
    <input type="submit" value="Login">
</form>

</body>
</html>