<?php
// Mulai sesi
session_start();

// Inisialisasi variabel nama pengguna
$username = "";

// Periksa apakah pengguna telah mengirimkan formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan pengguna dari formulir
    $username = $_POST["username"];

    // Simpan nama pengguna ke dalam sesi
    $_SESSION["username"] = $username;

    // Alihkan pengguna ke halaman selamat datang
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Masukkan Nama Pengguna</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
                                                                                