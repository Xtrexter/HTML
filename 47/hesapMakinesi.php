<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        div {
            margin: auto;
            margin-top: 20px;
            height: auto;
            width: 500px;
            color: forestgreen;
            border: 2px solid black;
            padding: 25px;
            background: honeydew;
        }
        .result {
            color: white;
            background: red;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
        a {
            color: white;
        }
        a:hover {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div>
    <form action="" method="get">
        <h3 align="center">Hesap Makinesi Uygulaması</h3>
        <table cellpadding="5px" width="450px">
            <tr>
                <td>Birinci Sayı</td>
                <td><input type="text" name="sayi1" class="form-control" placeholder="1. Sayıyı Giriniz" required></td>
            </tr>
            <tr>
                <td>İkinci Sayı</td>
                <td><input type="text" name="sayi2" class="form-control" placeholder="2. Sayıyı Giriniz" required></td>
            </tr>
            <tr>
                <td>Yapılacak İşlem</td>
                <td>
                    <select name="secim" class="form-control" required>
                        <option value="+">TOPLAMA</option>
                        <option value="-">FARKI</option>
                        <option value="*">ÇARPMA</option>
                        <option value="/">BÖLME</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="HESAPLA" style="width:215px" class="btn btn-outline-primary">
                    <input type="reset" value="Temizle" style="width:220px" class="btn btn-outline-danger">
                </td>
            </tr>
        </table>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["sayi1"]) && isset($_GET["sayi2"]) && isset($_GET["secim"])) {
    $sayi1 = $_GET["sayi1"];
    $sayi2 = $_GET["sayi2"];
    $secim = $_GET["secim"];
    $sonuc = 0;

 
    if (is_numeric($sayi1) && is_numeric($sayi2)) {
        switch ($secim) {
            case '+':
                $sonuc = $sayi1 + $sayi2;
                break;
            case '-':
                $sonuc = $sayi1 - $sayi2;
                break;
            case '*':
                $sonuc = $sayi1 * $sayi2;
                break;
            case '/':
                if ($sayi2 != 0) {
                    $sonuc = $sayi1 / $sayi2;
                } else {
                    $sonuc = "Bölme işlemi için ikinci sayı sıfır olamaz.";
                }
                break;
        }
        echo "<div class='result'><h1>$sayi1 $secim $sayi2 = $sonuc</h1>
        <button class='btn btn-primary'><a href='hesapMakinesi.php'>Hesap Makinesine Dönüş</a></button></div>";
    } else {
        echo "<div class='result'>Lütfen geçerli sayılar giriniz.</div>";
    }
}
?>
</body>
</html>