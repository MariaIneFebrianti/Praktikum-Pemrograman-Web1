<?php
    //deklarasi variabel
    $n = 19; //membuat variabel n dengan nilai 19
    $prima = true;

    for($i=2; $i<=($n/2); $i++)
    {
        if(($n % $i)==0)
        {
            $prima = false;
            break; //untuk menghentikan looping pada program
        }
    }
        if($prima) //kondisi jika variabel prima bernilai salah
        {
            echo "$n merupakan bilangan prima";
        }else
        {
        echo "$n bukan bilangan prima";
        }
?>