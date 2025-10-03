<?php
	$sayi1=$_GET["sayi1"];
	$sayi2=$_GET["sayi2"];
	$secim=$_GET["secim"];
	$sonuc=0;
	
		if(isset($secim))
		{
			
				if($secim == '+')
				{
					$sonuc=$sayi1+$sayi2;
				}
				else if($secim == '-')
				{
					$sonuc=$sayi1-$sayi2;
				}
				else if($secim == '*')
				{
					$sonuc=$sayi1*$sayi2;
				}
				else if($secim == '/')
				{
					$sonuc=$sayi1/$sayi2;
				}
		}
		echo "<div><h1 align='center'>$sayi1 $secim $sayi2 = $sonuc</h1>
 <button class='btn btn-primary'><a href='hesapMakinesi.php'>
Hesap.Makinesine.Dönüş</a></button></div>";
	

?>