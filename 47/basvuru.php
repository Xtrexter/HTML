<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $tc = trim($_POST['tc']);
    $adSoyad = trim($_POST['adSoyad']);
    $yas = trim($_POST['yas']);
    $ePosta = trim($_POST['ePosta']);
    $tarih = trim($_POST['tarih']);
    $deneyim = isset($_POST['deneyim']) ? $_POST['deneyim'] : '';
    $pDil = isset($_POST['pDil']) ? $_POST['pDil'] : [];
    $onay = isset($_POST['onay']) ? $_POST['onay'] : '';

   
    $hatalar = [];

   
    if (empty($tc)) {
        $hatalar[] = "T.C. Kimlik alanı boş bırakılamaz.";
    }
    if (empty($adSoyad)) {
        $hatalar[] = "Ad Soyad alanı boş bırakılamaz.";
    }
    if (empty($yas)) {
        $hatalar[] = "Yaş alanı boş bırakılamaz.";
    }
    if (empty($ePosta)) {
        $hatalar[] = "Mail Adresi alanı boş bırakılamaz.";
    }
    if (empty($onay)) {
        $hatalar[] = "Form onayı gereklidir.";
    }

    
    if (!empty($hatalar)) {
        foreach ($hatalar as $hata) {
            echo "<p style='color:red;'>$hata</p>";
        }
    } else {
       
        echo "<p style='color:green;'>Başvuru başarıyla alındı!</p>";
       
    }
}

?>