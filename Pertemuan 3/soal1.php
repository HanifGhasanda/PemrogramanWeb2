<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Operasi Matematika</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        select {
            width: 50px;
        }
        input[type="text"] {
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label>Nilai I</label>
            <input type="text" name="nilai1" required>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <label>Nilai II</label>
            <input type="text" name="nilai2" required>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai1 = (float)$_POST["nilai1"];
            $nilai2 = (float)$_POST["nilai2"];
            $operator = $_POST["operator"];
            $hasil = 0;

            switch ($operator) {
                case "+":
                    $hasil = $nilai1 + $nilai2;
                    break;
                case "-":
                    $hasil = $nilai1 - $nilai2;
                    break;
                case "*":
                    $hasil = $nilai1 * $nilai2;
                    break;
                case "/":
                    if ($nilai2 != 0) {
                        $hasil = $nilai1 / $nilai2;
                    } else {
                        echo "<p>Kesalahan: Pembagian dengan nol tidak diizinkan.</p>";
                        exit;
                    }
                    break;
                default:
                    echo "<p>Operator tidak valid.</p>";
                    exit;
            }

            echo "<p>Hasil: $nilai1 $operator $nilai2 = $hasil</p>";
        }
        ?>
    </div>
</body>
</html>
