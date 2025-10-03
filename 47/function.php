<?php

	function toplama($sayi1, $sayi2)
	{
		$toplam=0;
		$toplam+=$sayi1+$sayi2;
		return $toplam;
		
	}

	function ortalama($sayi1,$sayi2)
	{
		$ortalama=0;
		$ortalama= ($sayi1 +$sayi2) / 2; 
		return $ortalama;
		
		
	}
	
	function ekranayaz($değer)
	{
		echo "sonuç: ".$değer;
	}
	
	$a=toplama(12,22);
	echo ekranayaz($a);
	
	echo "<br>";
	
	$b=ortalama(33,3);
	echo ekranayaz($b);
	
	
?>