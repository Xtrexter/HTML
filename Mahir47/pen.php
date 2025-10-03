<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Hesaplama</title>
</head>
<body>
    <h1>Not Hesaplama</h1>
    <form method="post">
        <label for="not1">1. Yazılı Notu:</label>
        <input type="number" name="not1" required><br><br>
        
        <label for="not2">2. Yazılı Notu:</label>
        <input type="number" name="not2" required><br><br>
        
        <label for="performans1">1. Performans Notu:</label>
        <input type="number" name="performans1" required><br><br>
        
        <label for="performans2">2. Performans Notu:</label>
        <input type="number" name="performans2" required><br><br>       
        <input type="submit" value="Hesapla">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $not1 = $_POST['not1'];
        $not2 = $_POST['not2'];
        $performans1 = $_POST['performans1'];
        $performans2 = $_POST['performans2'];

       
        $ortalama = ($not1 + $not2 + $performans1 + $performans2) / 4;

       
        if ($ortalama >= 50) {
            $durum = "Geçti";
        } else {
            $durum = "Kaldı";
        }

        echo "<h2>Sonuçlar:</h2>";
        echo "Ortalama: " . number_format($ortalama, 2) . "<br>";
        echo "Durum: " . $durum;
    }
    ?>
</body>
</html>