<?php

$a=45;
$b=45;
$c=90;
	if($a + $b > $c && $a + $c > $b && $b + $c > $a)
	{
		if($a == $b && $b == $c)
		{
			echo "Bu bir eşkenar üçgendir. <br>";
		}
		else if($a == $b || $a == $c || $b == $c)
		{
			echo "Bu bir ikizkenar üçgendir.<br>";
		}
		else
		{
			echo "Bu bir çeşitkenar üçgendir.<br>";
		}
	}
	else {
    echo "Bu kenar uzunlukları ile bir üçgen oluşturulamaz.<br>";
}

?>