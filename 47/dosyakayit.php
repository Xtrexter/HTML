<?php
if ($_FILES["dosya"]) {
 $islem = move_uploaded_file($_FILES["dosya"]["tmp_name"], $_FILES["dosya"]
["name"]);
 cho $islem ? "Dosya başarıyla yüklendi" : "Hata oluştu";
} else {
 echo "Lütfen bir dosya seçin";
}
?>