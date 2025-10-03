<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['dosya'])) {
    $dosya = $_FILES['dosya'];
    $dosya_adi     = $dosya['name'];
    $dosya_boyutu  = $dosya['size'];
    $gecici_yol    = $dosya['tmp_name'];
    $dosya_tipi    = mime_content_type($gecici_yol);

   
    $izinli_turler = ['image/jpeg', 'image/png', 'application/pdf'];
    $maksimum_boyut = 2 * 1024 * 1024; 

    if (!in_array($dosya_tipi, $izinli_turler)) {
        echo "❌ Bu dosya türüne izin verilmiyor.";
    }
   
    elseif ($dosya_boyutu > $maksimum_boyut) {
        echo "❌ Dosya boyutu 2MB'den büyük olamaz.";
    }
   
    else {
        $hedef_klasor = 'uploads/';
        if (!is_dir($hedef_klasor)) {
            mkdir($hedef_klasor, 0755, true);
        }

        $yukleme_yolu = $hedef_klasor . basename($dosya_adi);
        if (move_uploaded_file($gecici_yol, $yukleme_yolu)) {
            echo "✅ Dosya başarıyla yüklendi: <strong>$dosya_adi</strong>";
        } else {
            echo "❌ Dosya yüklenemedi.";
        }
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <label>Dosya Seç:</label>
    <input type="file" name="dosya" required>
    <button type="submit">Yükle</button>
</form>
