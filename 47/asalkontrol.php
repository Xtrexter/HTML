<?php

    $sayi = $_POST["sayi"];
    
		
	$asal=true;
	
	if($sayi <= 1)
	{
		$asal=false;
	}
	else
	{
	for ($i=2; $i<=sqrt($sayi); $i++)
	{
		if ($sayi % $i == 0)
		{
			$asal=false;
			break;	
		}
	}
	}

if($asal){
	echo "$sayi asal sayidir";
}
else{
	echo"$sayi asal sayi değildir";
}
	
	


?>