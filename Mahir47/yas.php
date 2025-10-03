<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $dogumTarihi = $_POST['dogumTarihi'];
    $dogumTarihi = new DateTime($dogumTarihi);
    $bugun = new DateTime(); 
    $yas = $bugun->diff($dogumTarihi);
    echo "Yaşınız: " . $yas->y . " yıl, " . $yas->m . " ay, " . $yas->d . " gün.";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yaş Hesaplama</title>
</head>
<body>
    <h1>Yaş Hesaplama</h1>
    <form method="post" action="">
        <label for="dogumTarihi">Doğum Tarihiniz:</label>
        <input type="date" id="dogumTarihi" name="dogumTarihi" required>
        <input type="submit" value="Hesapla">
    </form>
</body>
</html>