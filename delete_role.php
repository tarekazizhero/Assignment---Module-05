<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    $roles = ['admin', 'manager', 'user'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedRole = $_POST['selected_role'];
        if (in_array($selectedRole, $roles)) {
            echo "Role deleted: $selectedRole";
        } else {
            echo "Invalid role: $selectedRole";
        }
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
    <title>Delete Role</title>
</head>
<body>
    <h2>Delete Role</h2>
    <form method="POST" action="delete_role.php">
        <label>Select Role to Delete:</label>
        <select name="selected_role">
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="user">User</option>
        </select><br><br>
        <button type="submit">Delete Role</button>
    </form>
    <a href="admin_dashboard.php">Back to Admin Dashboard</a>
</body>
</html>