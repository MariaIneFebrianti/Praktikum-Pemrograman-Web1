<html>
    <body>
        <?php
            echo "Ini adalah scrip lat3 dengan perulangan while"."<br>";
            $i=1;
            $n=3; //menentukan variabel yang akan ditambahkan
            $hasil=0;
            while($i<=$n)
            {
                $hasil += $i;
                if($i !=$n)
                {
                    echo "$i + ";
                }elseif($i = $n)
                {
                    echo "$i = ";
                }
                $i++;
            }
            echo "$hasil";   
        ?>
        <br> <br>

        <?php
        echo "Ini adalah scrip lat4 dengan perulangan for"."<br>";
            $i = 0;
            for($i=1; $i<=5; $i++)
            {
                echo "Nomor " .$i . "<br>";
            }
        ?>
        <br>

        <?php
            echo "Ini adalah scrip lat4 dengan perulangan do while"."<br>";
            $i=1;
            do
            {
                echo "Nomor " . $i . "<br>";
                $i++;
            }while($i<=5)
        ?>

    </body>
</html>