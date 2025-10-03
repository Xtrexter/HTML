<?php

function isimYazdir($isim, $sayi) {
    if ($sayi < 0) {

        return "Negatif bir sayı verilemez.";
    }
    for ($i = 0; $i < $sayi; $i++) {

        echo $isim . "<br>";

    }
}
$isim = "mahox"; 

$sayi = 8;

isimYazdir($isim, $sayi);

?>