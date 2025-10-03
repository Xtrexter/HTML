<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yazili1 = $_POST["yazili1"];
    $yazili2 = $_POST["yazili2"];
    $performans1 = $_POST["performans1"];
    $performans2 = $_POST["performans2"];

    $ortalama = ($yazili1 + $yazili2 + $performans1 + $performans2) / 4;

    if ($ortalama >= 50) {
        $durum = "Geçti";
    } else {
        $durum = "Kaldı";
    }

    echo "<div class='container'><h2>Sonuç:</h2><p>Ortalama: $ortalama, Durum: $durum</p></div>";
}
?>