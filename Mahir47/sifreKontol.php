<?php
session_start();
if($_POST["k_adi"] == "kullanici_1" && $_POST["sifre"] == "1234")
{
	$_SESSION["oturum_sahibi"] = $_POST["k_adi"];
	header("location:uygulama.php");
}
else
{
	header("location:uygulama.php");
}

?>