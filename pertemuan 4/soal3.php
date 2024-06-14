<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
</head>
<body>
    <form method="post">
        Nilai Awal: <input type="number" name="nilai_awal"><br>
        Nilai Akhir: <input type="number" name="nilai_akhir"><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai_awal = $_POST['nilai_awal'];
        $nilai_akhir = $_POST['nilai_akhir'];

        $deret = [];
        $jumlah = 0;

        for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
            if ($i % 2 != 0 && $i % 3 == 0) {
                $deret[] = $i;
                $jumlah += $i;
            }
        }

        $jumlah_bilangan = count($deret);

        echo "Maka deret bilangan yang tampil: " . implode(", ", $deret) . "<br>";
        echo "Jumlah bilangan: $jumlah_bilangan<br>";
        echo "Jumlah nilai bilangan: " . implode(" + ", $deret) . " = $jumlah<br>";
    }
    ?>
</body>
</html>
