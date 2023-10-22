<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan  bilangan Genap, Ganjil, dan Prima.</title>
</head>
<body>
<?php

for ($i = 1; $i < 20; $i++) {
    $prima = true;

        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j === 0) {
                $prima = false;
                break;
            }
        }?>
     <li>   
    <?php 
    if ($i % 2 === 0) {
        echo "Angka $i adalah bilangan Genap ";
    } else {
        echo "Angka $i adalah bilangan Ganjil ";
    }

    if ($prima && $i > 1) {
        echo "dan sekaligus Prima";
    }?>
    
    </li>
<?php
    echo "<br>";
 } ?>


</body>
</html>