<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    echo 'Welcome, Admin!';
} else {
    header('Location: login.php');
}