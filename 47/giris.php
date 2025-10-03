<?php
	$kulad=$_POST["kulad"];
	$soyad=$_POST["soyad"];
	$telefon=$_POST["telefon"];
	$eposta=$_POST["eposta"];
	$aciklama=$_POST["aciklama"];
	
		if(empty($kulad) || empty($soyad) ||  empty($telefon) || empty($eposta))
		{
			echo"Boş bıraktığınız alanlar var lütfen doldurup tekrar deneğiniz";
			echo"<br> <br> Ana sayfaya tekrar dönüyorsunuz";
			header("Refresh:4;url=sirasizde.php");
			
			
		}
			else if($kulad=="alp" && $soyad=="keskin" && $telefon=="0530 588 52 35" && $eposta=="alp123@gmail.com")
			{
				echo "girişiniz başarılı";
				echo "<br>";
				
				echo "Kullanıcı Adı: " . $kulad . "<br>";
				echo "Soyad: " . $soyad . "<br>";
				echo "Telefon: " . $telefon . "<br>";
				echo "E-posta: " . $eposta . "<br>";
				
				echo "Yaptığınız açıklama:" . $aciklama;
				
				
			}
			else{
				echo"yanlış girdiniz geri gidiyon";
				header("Refresh:4;url=sirazsizde.php");
				
			}
		


?>