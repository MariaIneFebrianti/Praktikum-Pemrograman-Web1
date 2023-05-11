<?php
    $olahraga = array("Sepak Bola",
    "Tenis Meja",
    "Bola Volly",
    "Sepak Takrow",
    "Golf",
    "Renang"
    );

    echo "Terdapat beberapa jenis olahraga, antara lain : ";
    echo "<br>";
    $i=0;
    echo "<br>";
    foreach ($olahraga as $value)
    { 
        echo "Olahraga " . $i++ . " : " . $value . "<br>";
    }
    echo "<br>"; 
    echo "Diantara beberapa olahraga yang ada, olah raga yang paling saya sukai adalah olah raga : " . "<br>" . $olahraga[1] . " dan " . $olahraga[5];
?>
