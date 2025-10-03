<?php
function enUzunKelimeyiBul($cumle) {
    
    $kelimeler = explode(' ', $cumle);
    
    
    $enUzunKelime = '';
    $maxUzunluk = 0;
    
   
    foreach ($kelimeler as $kelime) {
        
        if (strlen($kelime) > $maxUzunluk) {
            $enUzunKelime = $kelime;
            $maxUzunluk = strlen($kelime);
        }
    }
    
    return $enUzunKelime;
}


$cumle = "";
$enUzunKelime = enUzunKelimeyiBul($cumle);
echo "En uzun kelime: " . $enUzunKelime;
?>
