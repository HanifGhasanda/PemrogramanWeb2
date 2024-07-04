<?php

    include"koneksi.php";

    

    $tampil = "SELECT tblberita.id_berita, tblberita.idkategori, tblberita.judul_berita, tblberita.isi_berita, tblberita.penulis, tblberita.tgldipublish, tblkategori.nama_kategori 
    FROM tblberita INNER JOIN tblkategori ON tblberita.idkategori = tblkategori.idkategori;
";

    $hasiltampil = mysqli_query($con1, $tampil);

    echo"
    
    <div class = 'container-fluid text-white mt-5 mx-auto pb-5'>
            
        <div class='content px-3 py-3 bg-primary border rounded shadow-sm'>
            <div class= 'judul mb-4'>
                <h3><b>Tampil Kategori</b></h3>
            </div>
        
            <table class='table table-bordered table-dark table-striped text-white' border='1'>
                <thead>
                    <tr>
                        <th>ID Berita</th>
                        <th>ID Kategori</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Penulis</th>
                        <th>Tgl Di Publish</th>
                    </tr>
                </thead>
                <tbody>

    ";

    while ($row = mysqli_fetch_array($hasiltampil)){
    echo"

                        <tr>
                            <td>$row[id_berita]</td>
                            <td>$row[idkategori]</td>
                            <td>$row[judul_berita]</td>
                            <td>$row[isi_berita]</td>
                            <td>$row[penulis]</td>
                            <td>$row[tgldipublish]</td>
                        </tr>
    
    ";
    }

?>

                </tbody>    
            </table>
        </div>

    </div>