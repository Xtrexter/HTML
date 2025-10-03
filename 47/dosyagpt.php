<?php
// Dosya yükleme kontrolü
if (isset($_FILES["dosya"])) {
    // Dosya gönderildiyse, işlemleri burada yapın
    if ($_FILES["dosya"]["error"] === UPLOAD_ERR_OK) {
        $dosyaAdi = "YüklenenBelgeler"; // Dosyaların saklanacağı klasör
        $dosyaYeri = __DIR__ . DIRECTORY_SEPARATOR . $dosyaAdi . DIRECTORY_SEPARATOR . $_FILES["dosya"]["name"];
        
        // Yükleme yapılacak dizin kontrolü
        if (!file_exists($dosyaAdi)) {
            mkdir($dosyaAdi, 0777, true);  // Klasör yoksa oluşturulur
        }

        // Dosya zaten var mı kontrolü
        if (file_exists($dosyaYeri)) {
            echo "Bu dosya daha önceden yüklenmişti.";
        } else {
            // Dosya boyutunu kontrol et (örneğin, 1MB'dan büyük dosyalar engellenir)
            if ($_FILES["dosya"]["size"] > 1000000) {
                echo "Dosya boyutunuz 1MB’dan fazladır.";
            } else {
                // Dosya uzantısını kontrol et (sadece jpg ve png uzantılı dosyalar kabul edilir)
                $dosyaUzantisi = pathinfo($_FILES["dosya"]["name"], PATHINFO_EXTENSION);
                if ($dosyaUzantisi != "jpg" && $dosyaUzantisi != "png") {
                    echo "Sadece jpg ve png uzantılı dosyalar yüklenebilir.";
                } else {
                    // Dosya yükleme işlemi
                    $islem = move_uploaded_file($_FILES["dosya"]["tmp_name"], $dosyaYeri);
                    echo $islem ? "Dosya başarıyla yüklendi." : "Hata oluştu.";
                }
            }
        }
    } else {
        echo "Dosya yükleme hatası: " . $_FILES["dosya"]["error"];
    }
} else {
    echo "Lütfen bir dosya seçin.";
}
?>
