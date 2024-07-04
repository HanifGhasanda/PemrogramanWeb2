<title>M. Hanif Ghasanda - 211011400789</title>

<pre>

    PT 17
    HANDLE ERROR
    
    NO 1

    Contoh 1 : Salah ketik variable
               Warning: Undefined variable $angka_sau, Warning: Undefined variable $anga_dua
</pre>

<?php

class Hitungan {
    public function perhitungan($angka_satu, $angka_dua) {
        $perhitungan = $angka_satu + $angka_dua;
        echo $perhitungan;
    }
}

$angka_satu = 10;
$angka_dua = 21;

$hitung = new Hitungan();
$hitung->perhitungan($angka_sau, $anga_dua); 
?>


<pre>

    Contoh 2 : Salah pakai visibilitas
               Warning: Undefined property: visibilitas::$dataPrivate
</pre>

<?php

class dataPrivate {
    private $dataPrivate = "Data Private";

    public function tampilkanData() {
        echo $this->dataPrivate;
    }
}

class visibilitas extends dataPrivate {
    public function tampilkanDataVisibilitas() {
        echo $this->dataPrivate; 
    }
}

$data = new visibilitas();
$data->tampilkanDataVisibilitas();
?>

<pre>

    Contoh 2 : Lupa pakai $this
               Fatal error: Uncaught Error: Undefined constant "data"
</pre>

<?php

class dataData {
    public $data = "Data dalam kelas";

    public function tampilkanData() {
        echo data;
    }
}

$contoh = new dataData();
$contoh->tampilkanData();
?>




