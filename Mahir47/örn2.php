<?php

function ogrenciDurumu($isim, $not1, $not2, $not3) {

    $ortalama = ($not1 + $not2 + $not3) / 3;
    $gecmeNotu = 60;
    if ($ortalama >= $gecmeNotu) {

        $durum = "Geçti";

    } else {

        $durum = "Kaldı";

    }
    echo "Öğrenci Adı: $isim<br>";

    echo "Notlar: $not1, $not2, $not3<br>";

    echo "Ortalama: " . number_format($ortalama, 2) . "<br>";

    echo "Durum: $durum<br>";
}
$isim = "mahir"; 

$not1 = 70; 

$not2 = 80;

$not3 = 50;
ogrenciDurumu($isim, $not1, $not2, $not3);

?>