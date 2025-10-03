<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Görüntü Modu Ayarı</title>
</head>
<body>
    <div style="background-color: gray; padding: 20px;">
        <form>
            Web sayfasını <b>koyu</b> modda kullanmak ister misiniz?<br>
            <input type="radio" name="mod" id="evet"> Evet<br>
            <input type="radio" name="mod" id="hayır"> Hayır<br>
            <input type="button" value="Mod Ayarla" onclick="modDegis()">
        </form>
    </div>

    <script>
        function modDegis() {
            if (document.getElementById("evet").checked) {
                document.body.style.backgroundColor = "black";
                document.body.style.color = "white";
            } else if (document.getElementById("hayır").checked) {
                document.body.style.backgroundColor = "white";
                document.body.style.color = "black";
            } else {
                alert("Lütfen bir seçenek işaretleyin.");
            }
        }
    </script>
</body>
</html>