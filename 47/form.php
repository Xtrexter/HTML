<?php<?php
session_start(); 

$adSoyad = $cinsiyet = $telefon = $email = $ozgecmis = "";
$hata = "";
$gonderilenVeriler = []; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $adSoyad = htmlspecialchars($_POST['adSoyad']);
    $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
    $telefon = htmlspecialchars($_POST['telefon']);
    $email = htmlspecialchars($_POST['email']);
    $ozgecmis = htmlspecialchars($_POST['ozgecmis']);

    if (empty($adSoyad) || empty($cinsiyet) || empty($telefon) || empty($email) || empty($ozgecmis)) {
        $hata = "Lütfen tüm alanları doldurun.";
    } else {
    
        $gonderilenVeriler[] = [
            'adSoyad' => $adSoyad,
            'cinsiyet' => $cinsiyet,
            'telefon' => $telefon,
            'email' => $email,
            'ozgecmis' => $ozgecmis
        ];

      
        $_SESSION['gonderilenVeriler'][] = $gonderilenVeriler[0];
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Kodlama Eğitimi</h2>
        </div>
        <div class="card-body">
            <?php if ($hata): ?>
                <div class="alert alert-danger"><?php echo $hata; ?></div>
            <?php endif; ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="adSoyad">Ad ve Soyad</label>
                    <input type="text" class="form-control" id="adSoyad" name="adSoyad" placeholder="Ad ve Soyadınızı girin" required>
                </div>

                <div class="form-group">
                    <label>Cinsiyet</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cinsiyet" id="erkek" value="erkek" required>
                        <label class="form-check-label" for="erkek">Erkek</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cinsiyet" id="kadin" value="kadin" required>
                        <label class="form-check-label" for="kadin">Kadın</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="telefon">Telefon Numarası</label>
                    <input type="tel" class="form-control" id="telefon" name="telefon" placeholder="Telefon numaranızı girin" required>
                </div>

                <div class="form-group">
                    <label for="email">E-posta</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-posta adresinizi girin" required>
                </div>

                <div class="form-group">
                    <label for="ozgecmis">Özgeçmiş</label>
                    <textarea class="form-control" id="ozgecmis" name="ozgecmis" rows="4" placeholder="Özgeçmişinizi buraya yazın" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Gönder</button>
            </form>
        </div>
    </div>

    <!-- Gönderilen verileri listele