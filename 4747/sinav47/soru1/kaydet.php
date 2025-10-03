<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $ad = htmlspecialchars(trim($_POST['ad']));
    $eposta = htmlspecialchars(trim($_POST['eposta']));

    
    if (!empty($ad) && !empty($eposta)) {
        echo "Bilgiler başarıyla alındı<br>";
        echo "Adınız: " . $ad . "<br>";
        echo "E-postanız: " . $eposta . "<br>";
    } else if (empty($ad)) {
        echo "Ad alanı boş bırakılamaz.";
    } else if (empty($eposta)) {
        echo "E-posta alanı boş bırakılamaz.";
    }
}

?>
