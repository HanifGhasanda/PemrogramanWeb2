<!DOCTYPE html>
<html>
<head>
    <title>Form Input Luas Segitiga</title>
</head>
<body>
    <h2>Masukkan Data Alas dan Tinggi Segitiga</h2>
    <form method="post">
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <label for="alas<?= $i ?>">Alas Segitiga <?= $i + 1 ?>:</label>
            <input type="number" name="alas<?= $i ?>" required>
            <label for="tinggi<?= $i ?>">Tinggi Segitiga <?= $i + 1 ?>:</label>
            <input type="number" name="tinggi<?= $i ?>" required>
            <br>
        <?php } ?>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if(isset($_POST['hitung'])) {
        // Fungsi untuk menghitung luas segitiga
        function hitungLuasSegitiga($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }

        // Menghitung luas segitiga dan menampilkannya
        for ($i = 0; $i < 5; $i++) {
            $alas = $_POST['alas' . $i];
            $tinggi = $_POST['tinggi' . $i];
            $luas = hitungLuasSegitiga($alas, $tinggi);
            echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: $luas <br>";
        }
    }
    ?>
</body>
</html>