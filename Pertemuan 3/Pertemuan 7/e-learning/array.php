<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Penggunaan Array</title>
</head>
<body>
<h1>Penggunaan Array dalam PHP</h1>
<?php
$buah = ["Apel", "Jeruk", "Pisang", "Mangga"];
echo "<ul>";
foreach ($buah as $b) {
    echo "<li>$b</li>";
}
echo "</ul>";
?>
</body>
</html>