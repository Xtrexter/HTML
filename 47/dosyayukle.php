<?php
$dosyaAdi = "YüklenenBelgeler";


if (!is_dir($dosyaAdi)) {
    mkdir($dosyaAdi, 0755, true);
}

if ($_FILES["dosya"]) {
    
    $dosyaYeri = __DIR__ . DIRECTORY_SEPARATOR . $dosyaAdi . DIRECTORY_SEPARATOR . $_FILES["dosya"]["name"];
    
   
    $islem = move_uploaded_file($_FILES["dosya"]["tmp_name"], $dosyaYeri);
    
    
    echo $islem ? "Dosya başarıyla yüklendi" : "Hata oluştu";
} else {
    echo "Lütfen bir dosya seçin";
}
?>