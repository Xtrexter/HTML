<?php
	$ifade = "sınıfın en çalışkan öğrencisi emir.";
	$ifade = str_replace ("emir", "melih", $ifade);
	echo $ifade; echo "<br>";



 $tekerleme = 'Bir berber bir berbere:
    "Bre berber gel beraber,
    Bir berber dükkanı açalım" demiş.';
 echo strpos($tekerleme,'berber'); echo "<br>"; echo "<br>";
 
	$cumle="12. Sınıf Web Proglamcılığı Dersi";
	$uzunluk=strlen($cumle);
	echo "$cumle ==> karakter uzunluğu = $uzunluk";  echo "<br>";

 $buyuk=mb_strtoupper($cumle);
 echo " <br><br> $buyuk";
 
 $kucuk=mb_strtolower($cumle);
 echo "<br><br> $kucuk";
 
  $ters=strrev($cumle);
 echo "<br><br> $ters"
 


?>