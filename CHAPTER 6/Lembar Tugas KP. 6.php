<?php
    $server = $_SERVER['PHP_SELF'];
?>
    <h2><b>FORM PENJUALAN<b></h2>
       <hr color=black width="100%" align="left">
            <form action="<?php echo $server;?>" method="post">
                <table>
                    <tr>
                        <td>Nilai A</td>
                        <td> : </td>
                       <td> <input type="teks" name="A" id="A"></td>
                    </tr>
                    <tr>
                        <td>Nilai B</td>
                        <td> : </td>
                        <td> <input type="teks" name="B" id="B"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="button" id="button" value="Simpan">
                            <input type="reset" name="button" id="button" value="Reset"></td>
                    </tr>
                </table>
            </form>
<?php
    $A=$_POST["A"];
    $B=$_POST["B"];
    $hasil=$A+$B;
    //Menampilkan Hasil
    echo "Hasil = " . $hasil;
?>