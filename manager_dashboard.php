<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'manager') {
    echo 'Welcome, Manager!';
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
    <title>Dashboard - Manager</title>
</head>
<body>
    <h2>Manager Dashboard</h2>
    <h3>Employee List</h3>
    <ul>
        <li>Employee 1</li>
        <li>Employee 2</li>
        <li>Employee 3</li>
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>