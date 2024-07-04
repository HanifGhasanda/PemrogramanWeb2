<div class="container-fluid">
        <form action="input_berita.php" method="POST">
        <div class="content bg-primary border rounded text-white py-3 mb-5 px-3">
            <div class="judul">
                <h3 class="ms-3"><b>Form Berita</b></h3>
            </div>
            <div class="inputdata mx-3 mb-2">
                <label for="idkategori">ID Kategori</label>
                <input type="text" name="idkategori" id="idkategori" class="form-control">
            </div>
            <div class="inputdata mx-3 mb-2">
                <label for="judulberita">Judul Berita</label>
                <input type="text" name="judul_berita" id="judulberita" class="form-control">
            </div>
            <div class="isiberita mx-3 mb-2">
                <label for="isiberita">Isi Berita</label>
                <textarea name="isi_berita" id="isiberita" class="col-12 border rounded" style="min-height:120px; max-height:120px;"></textarea>
            </div>
            <div class="penulis mx-3 mb-2">
                <label for="penulisberita">Penulis</label>
                <input type="text" name="penulis" id="penulisberita" class="form-control">
            </div>
            <div class="tglpublish mx-3 mb-3">
                <label for="tglpublish">Tanggal Publish</label>
                <input type="date" name="tgldipublish" id="tglpublish" class="form-control">
            </div>
            <div class="tombol2 d-flex justify-content-end me-3">
                <button type="reset" class="btn btn-light me-3">Reset</button>
                <button type="submit" class="btn btn-secondary">Kirim</button>
            </div>
        </div>
        </form>
    </div>