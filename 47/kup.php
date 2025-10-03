<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematik Hesaplama</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Rastgele Sayı Üretme ve Hesaplama</h2>

<form method="post">
    <label for="count">Kaç adet x ve y değeri üretmek istersiniz?</label>
    <input type="number" id="count" name="count" min="1" required>
    <input type="submit" value="Hesapla">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $count = intval($_POST['count']);
    
    echo "<h3>Sonuç Tablosu</h3>";
    echo "<table>";
    echo "<tr><th>Rastgele Sayı Üretme Aralığı</th><th>x Değeri</th><th>y Değeri</th><th>İşlem Sonucu</th></tr>";

    for ($i = 0; $i < $count; $i++) {
        // Rastgele x ve y değerlerini belirle
        $x = rand(-100, -20); // -100 ile -20 arasında rastgele bir x değeri
        $y = rand(20, 100);   // 20 ile 100 arasında rastgele bir y değeri

        // Denklemi hesapla
        $result = 2 * abs(pow($x, 3) + sqrt($x * $y) - pow($y, 2));

        // Tabloya ekle
        echo "<tr>
                <td>-100 - -20 (x), 20 - 100 (y)</td>
                <td>$x</td>
                <td>$y</td>
                <td>$result</td>
              </tr>";
    }

    echo "</table>";
}
?>

</body>
</html>

</body>
</html>