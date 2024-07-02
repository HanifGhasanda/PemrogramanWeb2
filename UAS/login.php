<?php
ob_start();
require_once 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE nim = ?";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $nim);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result) == 1) {
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['nim'] = $nim;
                    echo "Login successful. Redirecting...";
                    header('Location: dashboard.php');
                    exit;
                } else {
                    echo "Invalid password.";
                }
            } else {
                echo "No account found with that NIM.";
            }
        } else {
            echo "Error executing query.";
        }
    } else {
        echo "Error preparing query.";
    }
}

ob_end_flush(); // Mengakhiri output buffering
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
