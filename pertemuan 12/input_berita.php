<?php
include"koneksi.php";

$idkategori = $_POST['idkategori'];
$judul_berita = $_POST['judul_berita'];
$isi_berita = $_POST['isi_berita'];
$penulis = $_POST['penulis'];
$tgldipublish =$_POST['tgldipublish'];


$query ="INSERT INTO tblberita(idkategori,judul_berita,isi_berita,penulis,tgldipublish)
values('$idkategori','$judul_berita','$isi_berita','$penulis','$tgldipublish')";

$result=mysqli_query($con1,$query);

if($result){
    header("Location:form_kategori.php");
    }else{
    echo"<h2>Data Gagal Ditambahkan!</h2>";
    }

    mysqli_close($con1);

?>