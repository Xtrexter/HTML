<?php

if (isset($_POST['gonder'])) {
    if (isset($_FILES['resim']) && $_FILES['resim']['error'] == 0) {
        $dosya = $_FILES['resim'];
        $dosyaAdi = $dosya['name'];
        $dosyaGecici = $dosya['tmp_name'];
        $dosyaBoyutu = $dosya['size'];
        $dosyaTipi = strtolower(pathinfo($dosyaAdi, PATHINFO_EXTENSION));

       
        $izinliUzantilar = ['jpg', 'jpeg', 'png'];

        if (in_array($dosyaTipi, $izinliUzantilar)) {
            if ($dosyaBoyutu <= 2 * 1024 * 1024) { 
                $yeniDosyaAdi = uniqid("resim_", true) . "." . $dosyaTipi;
                $hedefKlasor = "uploads/";

                
                if (!file_exists($hedefKlasor)) {
                    mkdir($hedefKlasor, 0755, true);
                }

                $hedefYol = $hedefKlasor . $yeniDosyaAdi;

                if (move_uploaded_file($dosyaGecici, $hedefYol)) {
                    echo "Dosya başarıyla yüklendi: <a href='$hedefYol'>$yeniDosyaAdi</a>";
                } else {
                    echo "Dosya yüklenirken bir hata oluştu.";
                }
            } else {
                echo "Dosya boyutu 2 MB'dan büyük olamaz.";
            }
        } else {
            echo "Sadece .jpg ve .png uzantılı dosyalara izin verilir.";
        }
    } else {
        echo "Bir dosya seçmediniz ya da yüklemede bir hata oluştu.";
    }
}
?>
