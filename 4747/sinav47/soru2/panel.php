<?php
session_start();


if (!isset($_SESSION["kulad"])) {
    header("Location: giris.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head><title>Panel</title></head>
<body>
    <h2>  Admin Hoşgeldin, <?php echo htmlspecialchars($_SESSION["kulad"]); ?>!</h2>
    <a href="panel.php">Oturumu Kapat</a>
</body>
</html>
