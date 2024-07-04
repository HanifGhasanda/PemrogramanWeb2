<?php
//memulaisession
session_start();
//ceksession
if(!isset($_SESSION['login']))
{
header('location:./login.php');
}
?>
<!DOCTYPEhtml>
<html>
<head>
<metacharset="utf-8">
<title>Home Remember Me</title>
</head>
<body>
<h5>Selamat datang di halaman utama website</h5>
<p><a href="./logout.php">Logout</a></p>
</body>
</html>