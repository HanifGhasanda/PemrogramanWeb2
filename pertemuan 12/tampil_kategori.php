<?php

    include"koneksi.php";

    $tampil = "SELECT * FROM tblkategori";

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
                        <th>Id Kategori</th>
                        <th>Nama Kategori</th>
                    </tr>
                </thead>
                <tbody>

    ";

    while ($row = mysqli_fetch_array($hasiltampil)){
    echo"

                        <tr>
                            <td>$row[idkategori]</td>
                            <td>$row[nama_kategori]</td>
                        </tr>
    
    ";
    }

?>

                </tbody>    
            </table>
        </div>

    </div>