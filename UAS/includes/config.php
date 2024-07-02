<?php
// File: includes/config.php

session_start();

$servername = "localhost";
$username = "root";
$password = ""; // Sesuaikan dengan password Anda
$dbname = "uefa2024"; // Sesuaikan dengan nama database Anda

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
