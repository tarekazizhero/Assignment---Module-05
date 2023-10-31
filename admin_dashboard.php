<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    echo 'Welcome, Admin!';
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
    <title>Dashboard - Admin</title>
</head>
<body>
    <h2>Admin Dashboard</h2>
    <h3>Role Management</h3>
    <ul>
        <li><a href="create_role.php">Create Role</a></li>
        <li><a href="edit_role.php">Edit Role</a></li>
        <li><a href="delete_role.php">Delete Role</a></li>
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>