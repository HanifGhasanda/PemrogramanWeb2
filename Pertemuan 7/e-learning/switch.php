<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Penggunaan SWITCH..CASE</title>
</head>
<body>
<h1>Penggunaan SWITCH dalam PHP</h1>
<p>Masukkan nomor bulan (1-12):</p>
<form action="penggunaanSWITCH..CASE.php" method="post">
    <input type="number" name="month" min="1" max="12" required>
    <input type="submit" value="Dapatkan Bulan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = $_POST['month'];
    switch ($month) {
        case 1:
            echo "Januari";
            break;
        case 2:
            echo "Februari";
            break;
            case 3:
                echo "Maret";
                break;
            case 4:
                echo "April";
                break;
                case 5:
                    echo "Mei";
                    break;
                case 6:
                    echo "Juni";
                    break;
                    case 7:
                        echo "Juli";
                        break;
                    case 8:
                        echo "Agustus";
                        break;
                        case 9:
                            echo "September";
                            break;
                        case 10:
                            echo "Oktober";
                            break;
                            case 11:
                                echo "November";
                                break;
                            case 12:
                                echo "Desember";
                                break;
       
        default:
            echo "Bulan tidak valid.";
    }
}
?>
</body>
</html>