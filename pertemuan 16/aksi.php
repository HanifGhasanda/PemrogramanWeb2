<?php
session_start();

// Simulate database stored values
$user = 'admin';
$pass = md5('admin');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    // Hash the incoming password
    $hashed_password = md5($password);

    if ($username === $user && $hashed_password === $pass) {
        $_SESSION['login'] = TRUE;

        if ($remember) {
            setcookie('login', $user, time() + (86400 * 30), "/", "", false, true); // 30 days expiration
        }
        
        header('location: ./home.php');
        exit();
    } else {
        echo "Invalid username or password.";
    }
} else {
    header('location: ./login.php');
    exit();
}
?>
