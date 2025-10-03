<?php
session_start();


if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kullanici = $_POST['kullanici'] ?? '';
    $sifre     = $_POST['sifre'] ?? '';


    $dogru_kullanici = 'admin';
    $dogru_sifre     = '12345';

    if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
        $_SESSION['giris'] = true;
        $_SESSION['kullanici'] = $kullanici;
        header("Location: index.php");
        exit;
    } else {
        $hata = "❌ Kullanıcı adı veya şifre hatalı!";
    }
}
?>


<?php if (isset($_SESSION['giris']) && $_SESSION['giris'] === true): ?>
    <h2>👋 Merhaba, <?= htmlspecialchars($_SESSION['kullanici']) ?>!</h2>
    <a href="?logout=1">Oturumu Kapat</a>
<?php else: ?>
   
    <h2>Giriş Yap</h2>
    <?php if (!empty($hata)) echo "<p style='color:red;'>$hata</p>"; ?>
    <form method="post">
        <input type="text" name="kullanici" placeholder="Kullanıcı Adı" required><br>
        <input type="password" name="sifre" placeholder="Şifre" required><br>
        <button type="submit">Giriş</button>
    </form>
<?php endif; ?>
