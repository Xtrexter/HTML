<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <style>
        div {
            margin: auto;
            margin-top: 20px;
            height: auto;
            width: 500px;
            color: white;
            border: 2px solid black;
            padding: 25px;
            background: lightskyblue;
        }
    </style>
    <title>Giriş Sayfası</title>
</head>
<body>
<div>
    <form action="girisKontrol.php" name="Kontrol" method="post">
        <h3 align="center">Yönetim Sisteme Giriş</h3>
        <table cellpadding="5px" width="450px">
            <tr>
                <td>Kullanıcı Adınız:</td>
                <td><input type="text" name="kAdi" maxlength="11" class="form-control" placeholder="Kullanıcı Adınızı Giriniz"></td>
            </tr>
            <tr>
                <td>Şifreniz:</td>
                <td><input type="password" name="sifre" class="form-control" placeholder="Şifrenizi Giriniz"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Giriş için tıklayınız" style="width:450px;color:white;" class="btn btn-outline-primary"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>