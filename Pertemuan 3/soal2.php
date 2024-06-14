<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akademik</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
        }
        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: calc(100% - 160px);
            margin-bottom: 10px;
        }
        .result {
            margin-top: 20px;
        }
        .result label {
            width: auto;
        }
        .result span {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>NILAI AKADEMIK</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="matakuliah">Nama Matakuliah :</label>
            <input type="text" id="matakuliah" name="matakuliah" required><br>
            <label for="nama">Nama Mahasiswa :</label>
            <input type="text" id="nama" name="nama" required><br>
            <label for="nim">NIM :</label>
            <input type="text" id="nim" name="nim" required><br>
            <label for="kehadiran">Jumlah Kehadiran :</label>
            <input type="text" id="kehadiran" name="kehadiran" required><br>
            <label for="tugas">Nilai Tugas :</label>
            <input type="text" id="tugas" name="tugas" required><br>
            <label for="uts">Nilai UTS :</label>
            <input type="text" id="uts" name="uts" required><br>
            <label for="uas">Nilai UAS :</label>
            <input type="text" id="uas" name="uas" required><br>
            <input type="submit" value="Hitung">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $matakuliah = $_POST["matakuliah"];
            $nama = $_POST["nama"];
            $nim = $_POST["nim"];
            $kehadiran = (float)$_POST["kehadiran"];
            $tugas = (float)$_POST["tugas"];
            $uts = (float)$_POST["uts"];
            $uas = (float)$_POST["uas"];

            // Hitung nilai akhir
            $maks_kehadiran = 18;
            $persen_kehadiran = ($kehadiran / $maks_kehadiran) * 100;
            $nilai_kehadiran = $persen_kehadiran * 0.10;
            $nilai_tugas = $tugas * 0.20;
            $nilai_uts = $uts * 0.30;
            $nilai_uas = $uas * 0.40;
            $nilai_akhir = $nilai_kehadiran + $nilai_tugas + $nilai_uts + $nilai_uas;

            // Tentukan grade
            switch (true) {
                case ($nilai_akhir >= 80):
                    $grade = "A";
                    break;
                case ($nilai_akhir >= 70):
                    $grade = "B";
                    break;
                case ($nilai_akhir >= 60):
                    $grade = "C";
                    break;
                case ($nilai_akhir >= 50):
                    $grade = "D";
                    break;
                default:
                    $grade = "E";
            }

            // Tentukan keterangan
            $keterangan = ($nilai_akhir > 65) ? "Lulus" : "Tidak Lulus";
            ?>
            <div class="result">
                <h3>Output</h3>
                <p>
                    <label>Nama Matakuliah:</label> <span><?php echo $matakuliah; ?></span><br>
                    <label>Nama:</label> <span><?php echo $nama; ?></span><br>
                    <label>NIM:</label> <span><?php echo $nim; ?></span>
                </p>
                <p>
                    <label>Jumlah Kehadiran:</label> <span><?php echo $kehadiran; ?></span><br>
                    <label>Nilai Kehadiran:</label> <span><?php echo number_format($nilai_kehadiran, 2); ?></span><br>
                    <label>Nilai Tugas:</label> <span><?php echo $tugas; ?></span><br>
                    <label>Nilai UTS:</label> <span><?php echo $uts; ?></span><br>
                    <label>Nilai UAS:</label> <span><?php echo $uas; ?></span>
                </p>
                <p>
                    <label>Nilai Akhir:</label> <span><?php echo number_format($nilai_akhir, 2); ?></span><br>
                    <label>Grade:</label> <span><?php echo $grade; ?></span><br>
                    <label>Keterangan:</label> <span><?php echo $keterangan; ?></span>
                </p>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
