<?php
session_start(); 

if (!isset($_SESSION['gonderilenVeriler'])) {
    header("Location: index.php");
    exit;
}

$gonderilenVeriler = $_SESSION['gonderilenVeriler'];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gönderilen Veriler</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Gönderilen Bilgiler</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ad ve Soyad</th>
                <th>Cinsiyet</th>
                <th>Telefon Numarası</th>
                <th>E-posta</th>
                <th>Özgeçmiş</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gonderilenVeriler as $veri): ?>
                <tr>
                    <td><?php echo htmlspecialchars($veri['adSoyad']); ?></td>
                    <td><?php echo htmlspecialchars($veri['cinsiyet']); ?></td>
                    <td><?php echo htmlspecialchars($veri['telefon']); ?></td>
                    <td><?php echo htmlspecialchars($veri['email']); ?></td>
                    <td><?php echo nl2br(htmlspecialchars($veri['ozgecmis'])); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="form.php" class="btn btn-primary">Geri Dön</a>
</div>

</body>
</html>