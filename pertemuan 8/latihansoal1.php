<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Soal 1 PT8</title>
</head>
<body>
    <h4>1. Buatlah program aplikasi yang menampilkan hari dalam seminggu untuk tanggal tertentu yang diberikan oleh pengguna.</h4>
    <form method="POST">
        <label for="tanggal">Masukkan tanggal (YYYY-MM-DD):</label><br><br>
        <input type="date" id="tanggal" name="tanggal" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tanggal_input = $_POST['tanggal'];
        $tanggal = new DateTime($tanggal_input);
        $hari = $tanggal->format('l');
        echo "<p>Hari dalam seminggu untuk tanggal $tanggal_input adalah: $hari</p>";
    }
    ?>
<pre>
Algoritma :
1. Terima input dari pengguna berupa tanggal (dalam format YYYY-MM-DD).
2. Ubah string tanggal menjadi objek DateTime.
3. Gunakan metode format dari objek DateTime untuk mendapatkan hari dalam seminggu.
4. Tampilkan hasilnya kepada pengguna.
</pre>
</body>
</html>