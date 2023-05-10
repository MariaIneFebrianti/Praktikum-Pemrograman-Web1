<?php
    $server=$_SERVER['PHP_SELF'];
?>

    <fieldset>
    <legend>Cek Biaya Perjalanan</legend>
        <form action="<?php echo $server;?> "method="post">
            <table width="255" border="0">
                <tr>
                    <td width="550">Tempat Tujuan</td>
                    <td width="10">:</td>
                    <td width="160"><select name="tempat_tujuan" id="select">
                        <option>Las Vegas</option>
                        <option>Amsterdam</option>
                        <option>Egypt</option>
                        <option>Tokyo</option>
                        <option>Caribbean Islands</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="button" id="button" value="Proses"></td>
                </tr>
            </table>
        </form>
    </fieldset>


<?php 
$tujuan = $_POST['tempat_tujuan'];
echo "<br>";
echo "Biaya Perjalanan Menuju $tujuan adalah "; 
switch ($tujuan)
{ 
case "Las Vegas": 
echo " $500"; 
break;
case "Amsterdam": 
echo " $1500"; 
break; 
case "Egypt": 
echo " $1750"; 
break; 
case "Tokyo": 
echo " $900"; 
break; 
case "Caribbean Islands": 
echo " $700"; 
break; 
} 
?>
