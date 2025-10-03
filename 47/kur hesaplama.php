<?php

	$turkLirasi=3600;
	$dolarkurumu($turkLirasi)
	$eurokurumu($turkLirasi)
	$sterlinkurumu($turkLirasi)

	function dolarkurumu($tutar)
	{
		$dk=$tutar / 36;
		echo $dk. "doların çevrilmiş hali:";
	}
	
	function eurokurumu($tutar)
	{
		$ek=$tutar / 37;
		echo $ek. "euro çevrilmiş hali:";
	}
	
	function sterlinkurumu($tutar)
	{
		$st=$tutar / 45;
		echo $ek. "sterlin çevrilmiş hali:";
	}




?>