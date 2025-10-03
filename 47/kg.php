<?php
$Boyunuz = 172; 

$Kilonuz = 60;  

$Sonuc = vkiHesapla($Boyunuz, $Kilonuz);

function vkiHesapla($Boy, $Kilo) {

    $Boy = $Boy / 100; 

    $BoyHesapla = $Boy * $Boy;

    $vki = round(($Kilo / $BoyHesapla), 2); 

    ekranayaz($vki); 

}
function ekranayaz($Hesapla) {

    if ($Hesapla < 18.5) {

        echo "<div style='color:lime'>" . $Hesapla . "<span><br>Zayıf</span></div>";

    } else if ($Hesapla >= 18.5 && $Hesapla < 24.9) {

        echo "<div style='color:limegreen'>" . $Hesapla . "<span><br>Sağlıklı</span></div>";

    } else if ($Hesapla >= 25 && $Hesapla < 29.9) {

        echo "<div style='color:orange'>" . $Hesapla . "<span><br>Fazla Kilolu</span></div>";

    } else if ($Hesapla >= 30 && $Hesapla < 34.9) {

        echo "<div style='color:orange'>" . $Hesapla . "<span><br>I. Derece Obezite</span></div>";

    } else if ($Hesapla >= 35 && $Hesapla < 39.9) {

        echo "<div style='color:red'>" . $Hesapla . "<span><br>II. Derece Obezite</span></div>";

    } else if ($Hesapla >= 40) {

        echo "<div style='color:maroon'>" . $Hesapla . "<span><br>III. Derece Obezite</span></div>";

    }

}

?>