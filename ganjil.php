<!DOCTYPE html>
<html lang ="en">
    <head>
        <title> tugas 1</title>
</head>
<body>
    <p> -MENAMPILKAN PERULANGAN BILANGAN GANJIL 100 -. 0 </p>
    <?php 
    $i = 99;
    while ($i >= 1){
        echo "$i";
        echo "<br/>";
        $i-=2;
    }
        ?>
        <p> -MENAMPILKAN BILANGAN KELIPATAN 3 MAKSIMAL 10 BILANGAN- </p>
        <?php
        $a = 3;
        for ($i, $a; $i <= 10; $i++) {
            if ($i) {
                echo pow ($i, $a). "<br>";
            }
        }
        ?>
        </body>
        </html>