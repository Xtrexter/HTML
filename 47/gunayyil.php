<?php
	date_default_timezone_set("Europe/Istanbul");
	
		$DogumTarihi=mktime(0, 0, 0, 6, 30, 2008);
		$suan=time();
		$gecenzaman=$suan-$DogumTarihi;
		
			echo "Bugün=" .date('d.m.Y H:i:s', $suan)."<br>";
			echo "Doğum günü=".date('d.m.Y H:i:s',$DogumTarihi)."<br><hr>";
			
			echo "geçen yıl=".round($gecenzaman/(60*60*24*365))."yıl<br>";
			 echo "Geçen Ay=".round($gecenzaman/(60*60*24*30)). "ay<br>";
			 echo "Geçen Hafta=".round($gecenzaman/(60*60*24*7))." hafta<br>";
			 echo "Geçen Gün=".round($gecenzaman/(60*60*24))." gün<br>";
			 echo "Geçen Saat=".round($gecenzaman/(60*60))."sa<br>";
			 echo "Geçen Dakika=".round(($gecenzaman/60))."dk<br>";
			 echo "Geçen Saniye=".$gecenzaman." sn<br>";

?>