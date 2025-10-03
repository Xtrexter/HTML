<?php

	$turkLirasi=3600;
	

	function dolarkurumu($tutar)
	{
		$dk=$tutar / 36;
		echo  "doların çevrilmiş hali:$dk <br>";
	}
	echo "<br>";
	
	function eurokurumu($tutar)
	{
		$ek=$tutar / 37;
		echo  "euro çevrilmiş hali: $ek <br>";
	}
	echo "<br>";
	
	function sterlinkurumu($tutar)
	{
		$st=$tutar / 45;
		echo "sterlin çevrilmiş hali:$st <br>";
	}

	dolarkurumu($turkLirasi);
	echo "<br>";
	eurokurumu($turkLirasi);
	echo "<br>";
	sterlinkurumu($turkLirasi);


?>