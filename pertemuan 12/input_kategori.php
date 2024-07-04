<?php
include"koneksi.php";

$nama_kategori = $_POST['nama_kategori'];


$query="INSERT INTO tblkategori(nama_kategori)
values('$nama_kategori')";

$result=mysqli_query($con1,$query);

if($result){
    header("Location:form_kategori.php");
    }else{
    echo"<h2>Data Gagal Ditambahkan!</h2>";
    }

    mysqli_close($con1);

?>