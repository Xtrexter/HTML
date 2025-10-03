<?php
function enUzunKelime($cumle) {
    $kelimeler = explode(' ', $cumle);
    $enUzun = '';

    foreach ($kelimeler as $kelime) {
        if (strlen($kelime) > strlen($enUzun)) {
            $enUzun = $kelime;
        }
    }

    return $enUzun;
}

echo enUzunKelime("ben mahox designe çok eğlenceli bir ders.");
?>