<title>M. Hanif Ghasanda - 211011400789</title>
<pre>
    NO 3

    Contoh 1 : Kolom sama value gak sesuai 
    Solusi   : Lihat value dan kolom dalam kode query atau database
               ( Fatal error: Uncaught mysqli_sql_exception: Column count doesn't match value count at row 1 )
</pre>


<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "handle_error";


$koneksi = new mysqli($server, $username, $password, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
// echo "Koneksi berhasil";


$sql = "INSERT INTO tb_handle_error (error, baris_error, jenis_error) VALUES ('error satu', 17)";


if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
