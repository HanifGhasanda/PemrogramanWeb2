<title>M. Hanif Ghasanda - 211011400789</title>
<pre>
    NO 3

    Contoh 2 : Value yang gak sesuai dengan tipe data kolom
    Solusi   : Lihat deklarasi value pada query dan tipe data kolom dalam database
               ( Fatal error: Uncaught mysqli_sql_exception: Truncated incorrect DOUBLE value: 'jenis error satu' )
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


$sql = "UPDATE tb_handle_error SET error = 'error dua', baris_error = 12 WHERE jenis_error = 0";


if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
