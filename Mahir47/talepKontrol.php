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
            width: 300px;
            color: white;
            border: 2px solid black;
            padding: 2px;
            text-align: center;
            margin-left: 10px;
        }
        .guvensiz {
            background: red;
        }
        .guvenli {
            background: green;
        }
        table {
            color: white;
        }
    </style>
    <title>Talep Kontrol</title>
</head>
<body>
<?php
$adisoyadi = $_POST['adisoyadi'];
$mesaj = $_POST['mesaj'];

echo "<div class='guvensiz'>
        <h4> Güvensiz Form</h4>
        <table>
            <tr>
                <td>Gönderen:</td>
                <td>$adisoyadi</td>
            </tr>
            <tr>
                <td>Mesaj:</td>
                <td>$mesaj</td>
            </tr>
        </table>
      </div>";

$gadisoyadi = htmlengelle($adisoyadi);
$gmesaj = guvenli_icerik($mesaj);

function htmlengelle($gelen) {
    $giden = htmlspecialchars($gelen);
    $giden = htmlentities($giden);
    return $giden;
}

function guvenli_icerik($gelen) {
    $giden = strip_tags($gelen);
    $giden = addslashes($giden);
    return $giden;
}

echo "<div class='guvenli'>
        <h4>Güvenli Form</h4>
        <table>
            <tr>
                <td>Gönderen:</td>
                <td>$gadisoyadi</td>
            </tr>
            <tr>
                <td>Mesaj:</td>
                <td>$gmesaj</td>
            </tr>
        </table>
      </div>";
?>
</body>
