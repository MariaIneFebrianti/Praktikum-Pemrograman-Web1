<?php
    $server=$_SERVER['PHP_SELF'];
?>

    <fieldset>
        <legend>Input Skor Nilai</legend>
        <form action="<?php echo $server;?> "method="post">
            <table width="400" border="0">
                <tr>
                    <td width="69">Skor Nilai</td>
                    <td width="10">:</td>
                    <td width="160"><input type="teks" name="skor" id="textfield"></td>
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
    $s=$_POST["skor"];
    if($s=="100") 
    {
        echo "<br>";
        echo "Top Score";
    }
    else
    {
        echo "Not Top Score";
    }
?>

