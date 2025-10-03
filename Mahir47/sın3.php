<?php
if ($_FILES && move_uploaded_file($_FILES['dosya']['tmp_name'], 'uploads/' . $_FILES['dosya']['name'])) {
    echo "Yüklendi.";
} else {
    echo "Yüklenemedi.";
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="dosya">
    <button type="submit">Yükle</button>
</form>
