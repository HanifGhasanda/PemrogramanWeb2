<?php
include "koneksi.php";


$id_berita = $_GET['id'] ?? 0;

if ($id_berita == 0) {
    die("ID berita tidak ditemukan.");
}

$query = "SELECT b.*, k.nama_kategori FROM tblberita b JOIN tblkategori k ON b.idkategori = k.idkategori WHERE id_berita = $id_berita";
$result = mysqli_query($con1, $query);
$berita = mysqli_fetch_assoc($result);

if (!$berita) {
    die("Data berita tidak ditemukan.");
}

if ($_POST) {
    $judul_berita = $_POST['judul_berita'];
    $isi_berita = $_POST['isi_berita'];
    $penulis = $_POST['penulis'];
    $nama_kategori = $_POST['nama_kategori'];

    
    $idkategori = $berita['idkategori'];
    $update_berita = "UPDATE tblberita SET judul_berita = '$judul_berita', isi_berita = '$isi_berita', penulis = '$penulis' WHERE id_berita = $id_berita";
    $update_kategori = "UPDATE tblkategori SET nama_kategori = '$nama_kategori' WHERE idkategori = $idkategori";

    if (mysqli_query($con1, $update_berita) && mysqli_query($con1, $update_kategori)) {
        header("Location: form_kategori.php");
    } else {
        echo "Error: " . mysqli_error($con1);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="content bg-info p-3">
    <div class="container bg-primary border rounded p-5 mb-3">
        <h2>Halaman Edit</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori:</label>
                <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="<?php echo $berita['nama_kategori']; ?>">
            </div>

            <div class="mb-3">
                <label for="judul_berita" class="form-label">Judul Berita:</label>
                <input type="text" name="judul_berita" class="form-control" id="judul_berita" value="<?php echo $berita['judul_berita']; ?>">
            </div>

            <div class="mb-3">
                <label for="isi_berita" class="form-label">Isi Berita:</label>
                <textarea name="isi_berita" class="form-control" id="isi_berita"><?php echo $berita['isi_berita']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis:</label>
                <input type="text" name="penulis" class="form-control" id="penulis" value="<?php echo $berita['penulis']; ?>">
            </div>

            <button type="submit" class="btn btn-secondary">Update</button>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>