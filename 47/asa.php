<?php
function asal($sayi) {
    if ($sayi <= 1) return false; 
    if ($sayi <= 3) return true;  
    if ($sayi % 2 == 0) return false;

    for ($i = 3; $i * $i <= $sayi; $i += 2) {
        if ($sayi % $i == 0) return false;
    }
    return true;
}

$sayi = 29;
echo asal($sayi) ? "$sayi asal bir sayıdır." : "$sayi asal bir sayı değildir.";
?>