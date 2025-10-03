<?php
	$tckimlik=$_POST["tckimlik"];
	$adsoyad=$_POST["adsoyad"];
	$yas=$_POST["yas"];
	$eposta=$_POST["eposta"];
	$dosya=$_POST["dosya"];
	$tarih=$_POST["tarih"];
	
	
	
	
	
	
		if(empty($tckimlik) || empty($adsoyad) ||  empty($yas) || empty($eposta) || empty($dosya) || empty($tarih) )
		{
			echo"Boş bıraktığınız alanlar var lütfen doldurup tekrar deneğiniz";
			echo"<br> <br> Ana sayfaya tekrar dönüyorsunuz";
			header("Refresh:4;url=baskahazirlik.php");
			
			
		}
			else if($tckimlik=="11223344556" && $adsoyad=="Alp keskin" && $yas=="18" && $eposta=="alp123@gmail.com")
			{
				echo "girişiniz başarılı";
				echo "<br> <br>";
				
				echo "Tc Kimlik: " . $tckimlik . "<br> <br>";
				echo "Ad Soyad: " . $adsoyad . "<br> <br>";
				echo "Yaş: " . $yas . "<br> <br>";
				echo "E-posta: " . $eposta . "<br> <br>";
				echo "dosya: " . $dosya . "<br> <br>";
				echo "tarih: " . $tarih . "<br> <br>";
				
				
				
				
			}
			else{
				echo"yanlış girdiniz geri gidiyon";
				header("Refresh:4;url=baskahazirlik.php");
				
			}
		


?>