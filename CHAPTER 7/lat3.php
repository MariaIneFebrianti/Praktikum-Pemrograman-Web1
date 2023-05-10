<?php
//deklarasi variabel
$n = 3; //menentukan variable yang akan ditambahkan
$hasil = 0; //nilai awal variabel hasil adalah 0

    for($i=1; $i<=$n; $i++) {
        $hasil += $i;
        if($i !=$n) //kondisi
        {
            echo "$i + ";
        }elseif($i = $n)
        {
            echo "$i = ";
        }
    }
    echo "$hasil";
?>
