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