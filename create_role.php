<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newRole = $_POST['new_role'];
        echo "Role created: $newRole";
    }
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
    <title>Create Role</title>
</head>
<body>
    <h2>Create Role</h2>
    <form method="POST" action="create_role.php">
        <label>New Role:</label>
        <input type="text" name="new_role" required><br><br>
        <button type="submit">Create Role</button>
    </form>
    <a href="admin_dashboard.php">Back to Admin Dashboard</a>
</body>
</html>