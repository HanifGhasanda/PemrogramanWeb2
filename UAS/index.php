<?php
session_start();
if (!isset($_SESSION['nim'])) {
    header('Location: login.php');
    exit;
} else {
    header('Location: dashboard.php');
    exit;
}
?>
