<?php
	
	$kulad=$_POST["kulad"];
	$sifre=$_POST["sifre"];
	
	if(empty($kulad) || empty($sifre))
	{
		echo "boş bıraktın aga ";
		echo "<br> geri gidiyon";
		header("Refresh:4;url=pihecbi.php");
	}
	
		else if($kulad=="alp" && $sifre=="123"){
			
			echo"girdin ";
			
		}
	else {
		echo "giremedin ";
		echo "<br> geri gidiyon";
		header("Refresh:4;url=pihecbi.php");
	}
	
?>