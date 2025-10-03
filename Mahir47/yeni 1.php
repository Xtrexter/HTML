<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dogumTarihi = $_POST["dogumTarihi"];
    $bugun = new DateTime();
    $dogum = new DateTime($dogumTarihi);
    $fark = $bugun->diff($dogum);

    $yil = $fark->y;
    $ay = $fark->m;
    $gun = $fark->d;

    echo "<div class='container'><h2>Sonuç:</h2><p>Yaş: $yil yıl, $ay ay, $gun gün</p></div>";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kenar1 = $_POST["kenar1"];
    $kenar2 = $_POST["kenar2"];
    $kenar3 = $_POST["kenar3"];

    if ($kenar1 + $kenar2 > $kenar3 && $kenar1 + $kenar3 > $kenar2 && $kenar2 + $kenar3 > $kenar1) {
        if ($kenar1 == $kenar2 && $kenar2 == $kenar3) {
            echo "<div class='container'><h2>Sonuç:</h2><p>Eşkenar Üçgen</p></div>";
        } elseif ($kenar1 == $kenar2 || $kenar1 == $kenar3 || $kenar2 == $kenar3) {
            echo "<div class='container'><h2>Sonuç:</h2><p>İkizkenar Üçgen</p></div>";
        } else {
            echo "<div class='container'><h2>Sonuç:</h2><p>Çeşitkenar Üçgen</p></div>";
        }
    } else {
        echo "<div class='container'><h2>Sonuç:</h2><p>Üçgen Oluşturmaz</p></div>";
    }
}
?>