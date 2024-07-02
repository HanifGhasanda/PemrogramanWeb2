<?php
// update_country.php

// Include file konfigurasi dan fungsi
require_once 'includes/config.php';
require_once 'includes/functions.php';

redirect_if_not_logged_in();

$id = $_GET['id'];
$country = get_country_by_id($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    if (update_country($id, $name)) {
        header('Location: dashboard.php');
        exit;
    } else {
        echo "Error updating country.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Negara</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Update Negara</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Nama Negara</label>
                <input type="text" name="name" value="<?php echo $country['name']; ?>" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Update Negara">
            </div>
        </form>
    </div>
</body>
</html>
