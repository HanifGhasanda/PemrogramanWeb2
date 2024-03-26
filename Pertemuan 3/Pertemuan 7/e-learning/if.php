<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Penggunaan IF</title>
</head>
<body>
<h1>Penggunaan IF dalam PHP</h1>
<p>Masukkan angka untuk memeriksa genap atau ganjil:</p>
<form action="IF.php" method="post">
    <input type="number" name="number" required>
    <input type="submit" value="Cek">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    if ($number % 2 == 0) {
        echo "Angka " . $number . " adalah genap.";
    } else {
        echo "Angka " . $number . " adalah ganjil.";
    }
}
?>
</body>
</html>