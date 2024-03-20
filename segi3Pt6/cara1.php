<?php
// Mendefinisikan data alas dan tinggi dalam array secara langsung
$data_segitiga = array(
    array("alas" => 5, "tinggi" => 3),
    array("alas" => 7, "tinggi" => 4),
    array("alas" => 10, "tinggi" => 6),
    array("alas" => 8, "tinggi" => 5),
    array("alas" => 6, "tinggi" => 4)
);

// Fungsi untuk menghitung luas segitiga
function hitungLuasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Menghitung luas segitiga dan menampilkannya
foreach ($data_segitiga as $segitiga) {
    $luas = hitungLuasSegitiga($segitiga['alas'], $segitiga['tinggi']);
    echo "Luas segitiga dengan alas {$segitiga['alas']} dan tinggi {$segitiga['tinggi']} adalah: $luas <br>";
}
?>