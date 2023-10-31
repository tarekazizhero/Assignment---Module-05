<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $users = json_decode(file_get_contents('users.json'), true);
    foreach ($users as $user) {
        if ($user['email'] === $email && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            if ($user['role'] === 'admin') {
                header('Location: admin_dashboard.php');
            } elseif ($user['role'] === 'manager') {
                header('Location: manager_dashboard.php');
            } else {
                header('Location: user_dashboard.php');
            }
        }
    }
    echo 'Invalid email or password';
}