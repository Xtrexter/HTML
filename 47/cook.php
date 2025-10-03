<?php
$cookie_adi = "kullanici";  
$cookie_degeri = isset($_COOKIE[$cookie_adi]) ? $_COOKIE[$cookie_adi] + 1 : 1;  
setcookie($cookie_adi, $cookie_degeri, time() + (60 * 60 * 24));  
echo "Ziyaret sayısı: " . $cookie_degeri;  

$kullanici_ip = $_SERVER["REMOTE_ADDR"];
if (isset($_GET['kategori'])) {
    setcookie("ip_" . $kullanici_ip, $_GET['kategori'], time() + (60 * 60 * 24)); 
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kategoriler</title>
</head>
<body>
    <div style="text-align:center; background-color:tomato;">
        <h3 style="margin:0;">Kategoriler</h3>
        <?php
        $kategoriler = ['cicek', 'sus_esyasi', 'hayvan', 'spor'];
        foreach ($kategoriler as $kategori) {
            echo "<a href='uygulama.php?kategori=$kategori'><img src='profil{$kategori}.jpg' style='height:100px'></a>";
        }
        ?>
    </div>
</body>
</html>
