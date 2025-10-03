<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kenar1 = $_POST['kenar1'];
    $kenar2 = $_POST['kenar2'];
    $kenar3 = $_POST['kenar3'];

   
    if ($kenar1 + $kenar2 > $kenar3 && $kenar1 + $kenar3 > $kenar2 && $kenar2 + $kenar3 > $kenar1) {
        
        if ($kenar1 == $kenar2 && $kenar2 == $kenar3) {
            $cesit = "Eşkenar Üçgen";
        } elseif ($kenar1 == $kenar2 || $kenar1 == $kenar3 || $kenar2 == $kenar3) {
            $cesit = "İkizkenar Üçgen";
        } else {
            $cesit = "Çeşitkenar Üçgen";
        }
        $sonuc = "Üçgen oluşturulabilir. Üçgen çeşidi: $cesit";
    } else {
        $sonuc = "Üçgen oluşturulamaz.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üçgen Hesaplama</title>
</head>
<body>
    <h1>Üçgen Hesaplama</h1>
    <form method="post" action="">
        <label for="kenar1">Kenar 1:</label>
        <input type="number" id="kenar1" name="kenar1" required><br>

        <label for="kenar2">Kenar 2:</label>
        <input type="number" id="kenar2" name="kenar2" required><br>

        <label for="kenar3">Kenar 3:</label>
        <input type="number" id="kenar3" name="kenar3" required><br>

        <input type="submit" value="Hesapla">
		 <input type="reset" value="Temizle">
    </form>

    <?php
   
    if (isset($sonuc)) {
        echo "<h2>Sonuç:</h2>";
        echo "<p>$sonuc</p>";
    }
    ?>
</body>
</html>