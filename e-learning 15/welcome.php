<?php
// Mulai sesi
session_start();

// Periksa apakah nama pengguna disimpan dalam sesi
if(isset($_SESSION["username"])){
    $username = $_SESSION["username"];
} else {
    // Jika tidak, arahkan pengguna kembali ke halaman login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $username; ?>!</h2>
    <p>Ini adalah halaman selamat datang. Anda telah berhasil login.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
