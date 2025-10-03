<?php
session_start();


if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION["oturum_sahibi"]);
    header("Location: uygulama.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["k_adi"] == "Kullanıcı" && $_POST["sifre"] == "php123") {
        $_SESSION["oturum_sahibi"] = $_POST["k_adi"];
        header("Location: uygulama.php");
        exit();
    } else {
        $hata = "Kullanıcı adı veya şifre yanlış!";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Oturum Yönetimi</title>
</head>
<body>
    <?php if (isset($_SESSION["oturum_sahibi"])): ?>
        <b style="color:green">Sayfamıza Hoşgeldin <?php echo htmlspecialchars($_SESSION["oturum_sahibi"]); ?></b><br><br>
        <a href="uygulama.php?action=logout" style="float:right">Oturum Kapat</a>
    <?php else: ?>
        <?php if (isset($hata)): ?>
            <p style="color:red;"><?php echo htmlspecialchars($hata); ?></p>
        <?php endif; ?>
        <form name="kullanicigirisi" method="post" action="uygulama.php">
            <table bgcolor="lightblue" width="354" border="1">
                <tr>
                    <td width="150px" height="25px">Kullanıcı Adı</td>
                    <td width="150px">
                        <input type="text" name="k_adi" required>
                    </td>
                </tr>
                <tr>
                    <td width="150px" height="25px">Şifre</td>
                    <td width="150px">
                        <input type="password" name="sifre" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="Giriş Yap">
                    </td>
                </tr>
            </table>
        </form>
        <b style="color:red">Lütfen Oturum Açınız</b>
    <?php endif; ?>
</body>
</html>

