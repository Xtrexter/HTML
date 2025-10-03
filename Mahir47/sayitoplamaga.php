<?php 

function toplam($n) {
    $toplam = 0;
    
    
    for ($i = 1; $i <= $n; $i++) {
        $toplam += $i;
    }

    return $toplam;
}

echo toplam(123);

?>