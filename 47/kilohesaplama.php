<?php
	$boyum=169;
	$kilom=1000
	;
	
	function vkihesapla($boy, $kilo)
	{
		$boy= $boy /100;
		$boyhesapla = $boy * $boy;
		$vkihesapla=round(($kilo / $boyhesapla),2);
		ekranayaz($vkihesapla);
		
	}
	
	function ekranayaz ($hesapla)
	{
		if($hesapla < 18.5)
		{
			echo $hesapla. "Zayıfsın aga";
		}
		else if ($hesapla >= 18.5 && $hesapla < 24.9)
		{
			echo $hesapla."iyisin aga";
		}
		else if ($hesapla >= 25 && $hesapla < 29.9)
			{
			echo $hesapla."kilolusun valla";
		}
		else if ($hesapla >= 30 && $hesapla < 34.9)
			{
			echo $hesapla."1. Derece obezsin reis";
		}
		else if ($hesapla >= 35 && $hesapla < 39.9)
			{
			echo $hesapla."2. derece obessin valla biraz kötü hee kendine çeki düzen ver";
		}
		else if ($hesapla >= 40)
			{
			echo $hesapla."efe olmussun kaçış yok";
		}
	}
	
	vkihesapla($boyum,$kilom);


?>