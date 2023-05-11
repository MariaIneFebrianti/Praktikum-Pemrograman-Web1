<?php
    $server=$_SERVER['PHP_SELF'];
?>

<?php
    $kode_buku=$_GET['kode_buku'];
    $judul=$_GET['judul'];
    $penerbit=$_GET['penerbit'];
    $pengarang=$_GET['pengarang'];
    $tahun_terbit=$_GET['tahun_terbit'];

    echo "Kode Buku : " . $kode_buku . "<br>";
    echo "Judul Buku : " . $judul . "<br>";
    echo "Penerbit : " . $penerbit . "<br>";
    echo "Penerbit : " . $pengarang . "<br>";
    echo "Tahun Terbit : " . $tahun_terbit . "<br>";
?>