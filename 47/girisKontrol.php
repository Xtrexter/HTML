<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            margin: auto;
            margin-top: 20px;
            height: auto;
            width: 500px;
            color: red;
            border: 2px solid red;
            padding: 25px;
            text-align: center;
        }
        .bosGiris {
            border: 2px solid orange;
            color: orange;
        }
        .dogruGiris {
            border: 2px solid green;
            color: green;
        }
    </style>
    <title>Giriş Kontrol</title>
</head>
<body>
<?php
$yonetim = array(
    array("ad" => "Melih", "sifre" => "123"),
    array("ad" => "Hüma", "sifre" => "456"),
    array("ad" => "Afra", "sifre" => "789"),
    array("ad" => "Göktuğ", "sifre" => "741"),
    array("ad" => "Ali", "sifre" => "159") 
);

$kullanici = $_POST['kAdi'];
$sifre = $_POST['sifre'];

if (empty($kullanici) || empty($sifre)) {
    echo "<div class='bosGiris'><h2>Bilgileriniz eksiktir. <br> Giriş sayfasına yönlendiriliyorsunuz.</h2></div>";
    header("Refresh: 5;url=login.php");
} else {
    $indis = -1; 
    for ($i = 0; $i < count($yonetim); $i++) {
        if ($yonetim[$i]["ad"] == $kullanici && $yonetim[$i]["sifre"] == $sifre) {
            $indis = $i; 
            break;
        }
    }
    
    if ($indis == -1) {
        echo "<div><h2>Sistemde Kaydınız bulunmamaktadır.<br> Giriş sayfasına yönlendiriliyorsunuz.</h2></div>";
        header("Refresh: 5; url=login.php");
    } else {
        echo "<div class='dogruGiris'><h2>Merhaba " . $yonetim[$indis]["ad"] . ",<br> Sisteme Girişiniz Başarıyla Gerçekleşmiştir.</h2></div>";
    }
}
?>
</body>
</html>