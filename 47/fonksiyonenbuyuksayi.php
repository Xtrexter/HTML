<?php

function enBuyukSayi($sayi1, $sayi2, $sayi3)
{
    if ($sayi1 > $sayi2 && $sayi1 > $sayi3) {
        return "Sayi1 daha büyüktür";
    } else if ($sayi2 > $sayi1 && $sayi2 > $sayi3) {
        return "Sayi2 daha büyüktür";
    } else {
        return "Sayi3 daha büyüktür";
    }
}

echo enBuyukSayi(3, 32, 12);

?>
