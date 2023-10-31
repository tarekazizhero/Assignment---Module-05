<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    $roles = ['admin', 'manager', 'user']; // List of existing roles

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedRole = $_POST['selected_role'];
        $newRole = $_POST['new_role'];

        // Check if the new role is in the list of existing roles
        if (in_array($newRole, $roles)) {
            // Update the role in your role management system
            // For this example, we'll just display the updated role
            echo "Role updated: $selectedRole to $newRole";
        } else {
            echo "Invalid role: $newRole";
        }
    }
} else {
    header('Location: login.php'); // Redirect unauthorized users
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Role</title>
</head>
<body>
    <h2>Edit Role</h2>
    <form method="POST" action="edit_role.php">
        <label>Select Role to Edit:</label>
        <select name="selected_role">
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="user">User</option>
        </select><br><br>
        <label>New Role Name:</label>
        <input type="text" name="new_role" required><br><br>
        <button type="submit">Edit Role</button>
    </form>

    <a href="admin_dashboard.php">Back to Admin Dashboard</a>
</body>
</html>