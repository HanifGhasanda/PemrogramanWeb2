<title>M. Hanif Ghasanda - 211011400789</title>
<pre>
    NO 3

    Contoh 3 : Value yang terlalu panjang
    Solusi   : Lihat deklarasi value pada query dan value kolom dalam database
               ( Fatal error: Uncaught mysqli_sql_exception: Data too long for column 'jenis_error' at row 1 )
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

$sql = "INSERT INTO tb_handle_error (error, baris_error, jenis_error) VALUES ('error satu', 17, 'jenis error dua jenis error dua jenis error dua')";


if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
