<?php
// session_start(); // Hapus baris ini jika sudah dipanggil di config.php
require_once 'includes/config.php';
require_once 'includes/functions.php';

redirect_if_not_logged_in();

$countries = get_countries();
$standings = get_standings();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Dashboard</h2>

        <h3>Daftar Negara UEFA</h3>
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>Nama Negara</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($countries as $country): ?>
                    <tr>
                        <td><?php echo $country['name']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h3>Klasemen UEFA 2024</h3>
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>Group</th>
                    <th>Negara</th>
                    <th>Menang</th>
                    <th>Seri</th>
                    <th>Kalah</th>
                    <th>Poin</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($standings as $standing): ?>
                    <tr>
                        <td><?php echo $standing['group_name']; ?></td>
                        <td><?php echo $standing['country_name']; ?></td>
                        <td><?php echo $standing['wins']; ?></td>
                        <td><?php echo $standing['draws']; ?></td>
                        <td><?php echo $standing['losses']; ?></td>
                        <td><?php echo $standing['points']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <br>
        <a href="add_country.php">Tambah Negara</a> |
        <a href="add_group.php">Tambah Grup</a> |
        <a href="generate_pdf.php">Generate PDF</a> |
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
