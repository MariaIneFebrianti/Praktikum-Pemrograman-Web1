<!-- <?php
$nim = "0411500400";
$nama = 'Chotimatul Musyarofah';
$umur = 23;
$nilai = 82.25;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
echo "Umur : " . $umur; print "<br>";
echo "Nilai : $nilai<br>";
?> -->

<table border=0>
    <tr>
        <tr>
            <td>NIM</td>
            <td> : </td>
            <td> 
                <?php
                    echo $nim . "<br>";
                ?>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>
                <?php
                    echo $nama . "<br>";
                ?>
            </td>
        </tr>
        <tr>
            <td>Umur</td>
            <td> : </td>
            <td>
                <?php
                    echo $umur . "<br>";
                ?>
            </td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td> : </td>
            <td>
                <?php
                    echo $nilai . "<br>";
                ?>
            </td>
        </tr>
    </tr>
</table>