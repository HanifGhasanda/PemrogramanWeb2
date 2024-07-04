<title>M. Hanif Ghasanda - 211011400789</title>
<pre>
    NO 2

    Contoh 1 : Salah Nama Database
    Solusi   : Periksa Nama Database dan value dari variablenya
               ( Fatal error: Uncaught mysqli_sql_exception: Unknown database 'database_name' )
</pre>

<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "database_name";


$koneksi = new mysqli($server, $username, $password, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
echo "Koneksi berhasil";
?>