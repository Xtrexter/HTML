<?php
$kullanici_ip=$_SERVER["REMOTE_ADDR"];
$kategori=$_GET['kategori'];
$cookie_adi = "ip_".$kullanici_ip;
$cookie_deger = $kategori;
setcookie($cookie_adi, $cookie_deger,time() + (60*60*24));
?>