<?php
	date_default_timezone_set("Europe/Istanbul");
	$zaman=$_POST["zaman"];
	
	if(empty($zaman))
	{
		echo "olmadı aga bozdun sende hee";
	}
 else{
	 $dogum_tarihi =strtotime($zaman);
	$suan=time();
	
		$gecen_zaman=$suan-$dogum_tarihi;
	echo "Bugün=".date("d.m.Y H:i:s",$suan)."<br>";
 echo "Doğum günü=".date("d.m.Y H:i:s",$dogum_tarihi)."<br><hr>";

	echo "geçen yıl=".round($gecen_zaman/(60*60*24*365))."yıl <br>";
	echo "geçen ay=".round($gecen_zaman/(60*60*24*30))."ay <br>";
	echo "geçen gün=".round($gecen_zaman/(60*60*24))."gün <br>";
 }
 
	
	
	
 ?>