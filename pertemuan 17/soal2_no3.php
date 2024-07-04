<title>M. Hanif Ghasanda - 211011400789</title>
<pre>
    NO 2

    Contoh 3 : Salah nama host 
    Solusi   : Lihat value dari variable host
               ( Warning: mysqli::__construct(): php_network_getaddresses: getaddrinfo for loclhost failed: No such host is known. )
</pre>


<?php
$server = "loclhost";
$username = "root";
$password = "";
$db = "handle_error";


$koneksi = new mysqli($server, $username, $password, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
echo "Koneksi berhasil";
?>