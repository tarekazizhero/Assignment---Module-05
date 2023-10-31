<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'user') {
    echo 'Welcome, User!';
} else {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - User</title>
</head>
<body>
    <h2>User Dashboard</h2>
    <p>This is the user dashboard. You can access your content here.</p>
    <a href="logout.php">Logout</a>
</body>
</html>