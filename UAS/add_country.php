<?php
// add_country.php
require_once 'includes/functions.php';
redirect_if_not_logged_in();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $sql = "INSERT INTO countries (name) VALUES (?)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $name);
        if (mysqli_stmt_execute($stmt)) {
            echo "Country added successfully.";
        } else {
            echo "Error adding country.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Country</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Add Country</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Country Name</label>
            <input type="text" name="name" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Add Country">
        </div>
    </form>
</body>
</html>
