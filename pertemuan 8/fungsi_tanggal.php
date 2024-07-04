<HTML>
    <HEAD>
    <TITLE>Fungsi Tanggal</TITLE>
    </HEAD>
<BODY>
    <fontsize="10px">
        <?php
            echo"Sekarang tanggal ";
            echo date('d-F-Y');
            echo"<br>dan jam ";
            echo date('h:i:sA');
        ?>

        <?php
            $skrg = getdate();
            $bulan1 = $skrg['month'];
            $hari1 = $skrg['mday'];
            $tahun1 = $skrg['year'];
            $jam1 = $skrg['hours'];
            if($jam1 <=11){
            echo"Selamat Pagi";
            }elseif($jam1 >11 and $jam1 <=15){
            echo"Selamat Siang";
            }elseif($jam1 >15 and $jam1 <=18){
            echo"Selamat Sore";
            }elseif($jam1 >18){
            echo"Selamat Malam";
            }
        ?>

        </h1>
        <h2>Selamatjumpa</h2>
        <h3>Saat ini tanggal 
            <?php echo"$hari1 $bulan1 $tahun1"; ?>
        </h3>
        </BODY>
        </HTML>
    </FONT>
</BODY>
</HTML>