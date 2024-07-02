<?php
// manage_standings.php
require_once 'includes/functions.php';
redirect_if_not_logged_in();

$groups = get_groups();
$countries = get_countries();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $group_id = $_POST['group_id'];
    $country_id = $_POST['country_id'];
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];
    $points = $_POST['points'];

    $sql = "INSERT INTO standings (group_id, country_id, wins, draws, losses, points) VALUES (?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, 'iiiiii', $group_id, $country_id, $wins, $draws, $losses, $points);
        if (mysqli_stmt_execute($stmt)) {
            echo "Standing added successfully.";
        } else {
            echo "Error adding standing.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Standings</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Manage Standings</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="group_id">Group</label>
            <select name="group_id" required>
                <?php foreach ($groups as $group): ?>
                    <option value="<?php echo $group['id']; ?>"><?php echo $group['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="country_id">Country</label>
            <select name="country_id" required>
                <?php foreach ($countries as $country): ?>
                    <option value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="wins">Wins</label>
            <input type="number" name="wins" required>
        </div>
        <div class="form-group">
            <label for="draws">Draws</label>
            <input type="number" name="draws" required>
        </div>
        <div class="form-group">
            <label for="losses">Losses</label>
            <input type="number" name="losses" required>
        </div>
        <div class="form-group">
            <label for="points">Points</label>
            <input type="number" name="points" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Add Standing">
        </div>
    </form>
</body>
</html>
