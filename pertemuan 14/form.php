<?php

    include"koneksi.php";

    $tabel1 = mysqli_query($koneksi,"SELECT * FROM tabel_1");
    $tabel2 = mysqli_query($koneksi,"SELECT * FROM tabel_2");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="judul py-3">
            <h4><b>Tabel 1</b></h4>
        </div>
        <div class="tablenya">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($dataku = mysqli_fetch_row($tabel1))
                    echo"
                        <tr>
                            <td>$dataku[0]</td>
                            <td>$dataku[1]</td>
                            <td>$dataku[2]</td>
                        </tr>
                        ";
                    ?>
                </tbody>
            </table>
        </div>

        <div class="judul py-3">
            <h4><b>Tabel 2</b></h4>
        </div>
        <div class="tablenya">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($data2 = mysqli_fetch_row($tabel2))
                    echo"
                        <tr>
                            <td>$data2[0]</td>
                            <td>$data2[1]</td>
                            <td>$data2[2]</td>
                        </tr>
                        ";
                    ?>
                </tbody>
            </table>
        </div>


        <div class="kirimbarang">
            <h4><b>Kirim Barang</b></h4>
        </div>
        <div class="formnya">
            <form action="aksi_form.php" method="POST">
                <label for="kodebarang">Kode Barang</label>
                <select name="kode" id="kodebarang" class="form-select">
                    <?php

                        $tabel1 = mysqli_query($koneksi, "SELECT * FROM tabel_2");
                        while($data1 = mysqli_fetch_row($tabel1)){
                        echo'<option value="'.$data1[0].'">'.$data1[0].'/'.$data1[1].'</option>';
                        }
                    ?>
                </select>
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" class="form-control">
                <input type="submit" value="Kirim" class="btn btn-primary mt-3">
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>