<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

redirect_if_not_logged_in();

$id = $_GET['id'];
$standing = get_standing_by_id($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];
    $points = $_POST['points'];

    if (update_standing($id, $wins, $draws, $losses, $points)) {
        header('Location: dashboard.php');
        exit;
    } else {
        echo "Error updating standing.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Klasemen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Update Klasemen</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="wins">Menang</label>
                <input type="number" name="wins" value="<?php echo $standing['wins']; ?>" required>
            </div>
            <div class="form-group">
                <label for="draws">Seri</label>
                <input type="number" name="draws" value="<?php echo $standing['draws']; ?>" required>
            </div>
            <div class="form-group">
                <label for="losses">Kalah</label>
                <input type="number" name="losses" value="<?php echo $standing['losses']; ?>" required>
            </div>
            <div class="form-group">
                <label for="points">Poin</label>
                <input type="number" name="points" value="<?php echo $standing['points']; ?>" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Update Klasemen">
            </div>
        </form>
    </div>
</body>
</html>
