<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Soal 2 PT8</title>
</head>
<body>
    <h4>2. Buatlah program aplikasi yang membalikkan string yang diberikan oleh pengguna dan menampilkan jumlah karakter dalam string tersebut.</h4>
    <form method="POST">
        <label for="string">Masukkan string:</label>
        <input type="text" id="string" name="string" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string_input = $_POST['string'];
        $string_terbalik = strrev($string_input);
        $jumlah_karakter = strlen($string_input);

        echo "<p>String yang dibalik: $string_terbalik</p>";
        echo "<p>Jumlah karakter dalam string: $jumlah_karakter</p>";
    }
    ?>

<pre>
Algoritma :
1. Terima input dari pengguna berupa string.
2. Balikkan string menggunakan fungsi strrev.
3. Hitung jumlah karakter dalam string menggunakan fungsi strlen.
4. Tampilkan string yang dibalik dan jumlah karakternya kepada pengguna.
</pre>
</body>
</html>