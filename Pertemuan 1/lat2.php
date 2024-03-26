<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kesan Pertama Belajar PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $nama = "hanip"; 
        $kesan_pertama = "Kesan pertama kali belajar PHP sangat mengasyikkan. Saya merasa terlibat dengan kekuatan untuk membuat hal-hal yang luar biasa di web. Tidak sabar untuk mempelajari lebih lanjut!";
        ?>

        <h1>Hallo, <?php echo $nama; ?>!</h1>
        <p><?php echo $kesan_pertama; ?></p>
    </div>
</body>
</html>
