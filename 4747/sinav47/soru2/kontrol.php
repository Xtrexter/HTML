<?php
session_start();
if($_POST["kulad"] == "admin" && $_POST["sifre"] == "1234")
{
	
	if(!$kulad=="admin" || !$sifre=="1234")
	{
		echo "giriş başarısız oldu ";
	}
	else{
		echo "giriş başarılı. Yönlendiriliyorsunuz";
		header("location:panel.php");
	}
}
?>