<?php
// Kullanıcıdan üçgenin kenar uzunluklarını alıyoruz
$a = floatval(readline("Birinci kenar uzunluğunu girin:65"));
$b = floatval(readline("İkinci kenar uzunluğunu girin:90 "));
$c = floatval(readline("Üçüncü kenar uzunluğunu girin:25 "));

// Üçgenin oluşup oluşmadığını kontrol ediyoruz
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    // Üçgen oluşuyorsa çeşidini belirliyoruz
    if ($a == $b && $b == $c) {
        echo "Bu bir eşkenar üçgendir.\n";
    } elseif ($a == $b || $a == $c || $b == $c) {
        echo "Bu bir ikizkenar üçgendir.\n";
    } else {
        echo "Bu bir çeşitkenar üçgendir.\n";
    }
} else {
    echo "Bu kenar uzunlukları ile bir üçgen oluşturulamaz.\n";
}
?>
