<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

redirect_if_not_logged_in();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $country_name = $_POST['country_name'];

    $sql = "INSERT INTO countries (name) VALUES (?)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $country_name);
        if (mysqli_stmt_execute($stmt)) {
            header('Location: dashboard.php');
            exit;
        } else {
            echo "Error executing query.";
        }
    } else {
        echo "Error preparing query.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Negara</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Negara</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="country_name">Nama Negara</label>
                <input type="text" name="country_name" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Tambah Negara">
            </div>
        </form>
    </div>
</body>
</html>
