<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Mahasiswa</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
        }
        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: calc(100% - 120px);
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
        <h2>Data Nilai Mahasiswa</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" required><br>
            <label for="jurusan">Jurusan :</label>
            <input type="text" id="jurusan" name="jurusan" required><br>
            <label for="nilai_tugas">Nilai Tugas :</label>
            <input type="text" id="nilai_tugas" name="nilai_tugas" required><br>
            <label for="nilai_uts">UTS :</label>
            <input type="text" id="nilai_uts" name="nilai_uts" required><br>
            <label for="nilai_uas">Nilai UAS :</label>
            <input type="text" id="nilai_uas" name="nilai_uas" required><br>
            <input type="submit" value="Hitung">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $jurusan = $_POST["jurusan"];
            $nilai_tugas = (float)$_POST["nilai_tugas"];
            $nilai_uts = (float)$_POST["nilai_uts"];
            $nilai_uas = (float)$_POST["nilai_uas"];
            
            // Hitung rata-rata
            $rata_rata = ($nilai_tugas + $nilai_uts + $nilai_uas) / 3;
            ?>
            <div class="result">
                <h3>Output</h3>
                <p>
                    <label>Nama:</label> <span><?php echo $nama; ?></span>
                    <label>Jurusan:</label> <span><?php echo $jurusan; ?></span>
                </p>
                <p>
                    <label>Nilai Tugas:</label> <span><?php echo $nilai_tugas; ?></span>
                    <label>Nilai UTS:</label> <span><?php echo $nilai_uts; ?></span>
                </p>
                <p>
                    <label>Nilai UAS:</label> <span><?php echo $nilai_uas; ?></span>
                    <label>Rata-rata:</label> <span><?php echo number_format($rata_rata, 2); ?></span>
                </p>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
