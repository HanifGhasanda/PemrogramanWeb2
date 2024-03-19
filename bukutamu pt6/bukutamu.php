<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Nama: <input type="text" name="Nama" required><br><br>
  Email: <input type="text" name="Email" required><br><br>
  <label for="komentar">Komentar:</label>
  <textarea id="komentar" name="komentar" rows="4" cols="50"></textarea><br><br>
  <input type="submit" value="Simpan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $nama = $_POST["Nama"];
  $email = $_POST["Email"];
  $komentar = $_POST["komentar"];


  $file = fopen("bukutamu.dat", "a");
  fwrite($file, "Nama: $nama\n");
  fwrite($file, "Email: $email\n");
  fwrite($file, "Komentar: $komentar\n\n");
  fclose($file);

  echo "<h2>Data yang Dikirim</h2>";
  echo "Nama: $nama <br>";
  echo "Email: $email <br>";
  echo "Komentar: $komentar <br>";
}
?>

</body>
</html>