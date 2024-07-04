<title>PT18</title>
    <h4>FUNGSI STRING</h4>
    <span>A. Strlen(string) : mengetahui jumlah karakter dalam string
    </span>
    <br><br>

<?php
    $mystring1 = "Apa kabar";
    echo"Jumlah karakter pada $mystring1 adalah :".strlen($mystring1)."<br>"
    ;

    //menghitung panjang string dalam $mystring
    $mystring2 = "Menghitung panjang string";
    echo"Jumlah karakter pada $mystring2 adalah: ".strlen($mystring2) ."<br>";
    echo"Jumlah karakter semua: ";
    echo strlen($mystring1) + strlen($mystring2)."<br>";
?>

    <br><br>
    <span>B. Strtoupper(string) : mengubah huruf kecil menjadi huruf besar
    </span>
    <br><br>

<?php
    $string = " jangan lelah karena error";
    echo strtoupper($string)."<br>";
    echo strtoupper("Belajar pemrograman perlu banyak berlatih");
?>

    <br><br><br>
    <span>C. Strtolower(string) : mengubah huruf besar menjadi huruf kecil
    </span>
    <br><br>

<?php
    $string = "LATIHAN FUNGSI STRING";
    echo strtolower($string)."<br>";
    echo strtolower("MENGUBAH MENJADI HURUF KECIL");
?>

    <br><br><br>
    <span>D/E. ucfirst(string) : fungsi ini akan merubah huruf pada awal kaliamat menjadi huruf kapital / ucwords(string) : fungsi ini akan merubah huruf pada awal setiap kata menjadi huruf kapital
    </span>
    <br><br>

<?php
    $string="selamat mengerjakan tugas";
    echo ucwords($string)."<br>";
    echo ucfirst("huruf pertama besar")
?>

    <br><br><br>
    <span>F/G/H. Ltrim(string) : menghapus spasi di kiri string / Rtrim(string) : menghapus spasi di kanan string / Trim(string) : menghapus spasi baik di awal atau di akhir string
    </span>
    <br><br>

<?php
    $nama11="Endar Nirmala";
    $nama12="Hai apa kabar";
    $nama13="Selamat datang";

    echo trim($nama11)."<br>";
    echo ltrim($nama12)."<br>";
    echo rtrim($nama13)."<br>";
?>

    <br><br><br>
    <span>I. Substr(string,awal,jumlah) : memotong string pada posisi awal sebanyak jumlah karakter
    </span>
    <br><br>

<?php
    $string1 = "Belajar PHP Menyenangkan";
    $sub_string1 = substr($string1,8);
    $sub_string2 = substr($string1,3,10);

    echo $sub_string1."<br>";
    echo $sub_string2."<br>";

    $string3 = "6734569";
    $sub_string3 = substr($string3,3);
    echo$sub_string3."<br>";
?>


    <br><br><br>
    <span>J. substr_count(string,sub-string,awal,panjang )
    </span>
    <span>
        <pre>
        string : barisan karakter
        sub-string : string yang dicari
        awal : memulai pencarian
        panjang : panjang pencarian
        </pre>
    </span>
    <br><br>

<?php
    $string = "This is nice today";
    echo strlen($string)."<br>"; //panjangstring
    echo substr_count($string,"nice")."<br>";
    echo substr_count($string,"is",2)."<br>";
    echo substr_count($string,"is",3)."<br>";
    echo substr_count($string,"is",3,3)."<br>";
?>
