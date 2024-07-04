<?php

    require"koneksi.php";

    // TAMPIL DATA

    // $tampil = "SELECT * FROM tabel_mahasiswa";

    // $hasiltampil = mysqli_query($con1, $tampil);

    // CARI DATA

    $cari = $_POST['nama'];

    $hasilcari = mysqli_query($con1, "SELECT * FROM tabel_mahasiswa WHERE nama LIKE '%$cari%' ORDER BY nama ASC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pencarian 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container p-3 bg-primary my-5 border rounded shadow-sm">
        <div class="judul">
            <h3 class="text-white">Contoh Program Mencari Record berdasarkan field nama.</h3>
        </div>
        <div class="forminputan">
            <form action="" method="POST">
                <label for="nama" class="text-white">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control mb-3">
                <input type="reset" value="Reset" class="btn btn-danger">
                <input type="submit" value="Cari" class="btn btn-success">
            </form>
        </div>
        <div class="hasil">
            <table class="table table-bordered table-dark table-striped text-white mt-2">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>JURUSAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($data = mysqli_fetch_array($hasilcari)){
                    echo"    
                        <tr>
                            <td>$data[nim]</td>
                            <td>$data[nama]</td>
                            <td>$data[alamat]</td>
                            <td>$data[jurusan]</td>
                        </tr>
                    ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>