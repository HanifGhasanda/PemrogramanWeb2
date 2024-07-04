<?php

    include"koneksi.php";

    

    $tampil = "SELECT tblberita.id_berita, tblberita.judul_berita, tblberita.isi_berita, tblberita.penulis, tblberita.tgldipublish, tblkategori.nama_kategori 
    FROM tblberita INNER JOIN tblkategori ON tblberita.idkategori = tblkategori.idkategori;
";

    $hasiltampil = mysqli_query($con1, $tampil);

    echo"
    
    <div class = 'container-fluid text-white mt-5 mx-auto pb-5'>
            
        <div class='content px-3 py-3 bg-primary border rounded shadow-sm'>
            <div class= 'judul mb-4'>
                <h3><b>Tampil Form</b></h3>
            </div>
        
            <table class='table table-bordered table-dark table-striped text-white' border='1'>
                <thead>
                    <tr>
                        <th>Nama Kategori</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Penulis</th>
                        <th>Tgl Di Publish</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

    ";

    while ($row = mysqli_fetch_array($hasiltampil)){
        echo "
                    <tr>
                        <td>$row[nama_kategori]</td>
                        <td>$row[judul_berita]</td>
                        <td>$row[isi_berita]</td>
                        <td>$row[penulis]</td>
                        <td>$row[tgldipublish]</td>
                        <td>
                            <div class='dropdown'>
                                <button class='btn btn-secondary dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                    Action
                                </button>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='edit.php?id=$row[id_berita]'>Edit</a></li>
                                    <li><a class='dropdown-item' href='delete.php?id=$row[id_berita]'>Hapus</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                ";
    }
    

?>

                </tbody>    
            </table>
        </div>

    </div>