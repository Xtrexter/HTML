<?php
/*
echo "Alp Keskin";
echo "<br>";
echo "Alp Keskin";
echo "<br>";
echo "Alp Keskin"; 
*/

/*
$sayi1=23;
$sayi2=3;
$sayi3=6;
$toplam=0;
$ortalama=0;

$toplam=$sayi1+$sayi2+$sayi3;
echo $toplam." ";
echo "<br>";
$ortalama=($sayi1+$sayi2+$sayi3) / 3;
echo $ortalama." ";
*/

/*
$sayi1=5;
$sayi2=3;

 if($sayi1>$sayi2)
 {
	 echo "Birinci sayı daha büyük.";
 }
	else
	{
		echo "ikinci sayı daha büyük";
	}
*/


$sayi1=1;
$sayi2=5;
$sayi3=0;

	if ($sayi1<$sayi3 && $sayi1<$sayi2)
	{
		echo "birinci sayi daha küçük";
	}
	else if ( $sayi2<$sayi1 && $sayi2<$sayi3)
	{
		echo "ikinci sayi daha küçük";
	}
	else
	{
		echo "ücüncü sayi daha küçük";
	}

	/*
	for($i=0;$i<20;$i++)
	{
	 echo "Alp 123";
	 echo "<br>";
	}
	*/
/*
	$i=1;
	$ad="alp 123";
	while($i<20){
		
		$i++;
		echo $ad;
		echo "<br>";
	}
	*/
/*
	for($i=0;$i<=20;$i++)
	{
	 echo $i;
	 echo "<br>";
	}
	*/
	
	$toplam=0;
	for($i=0;$i<=20;$i++)
	{
	 
	 
	 $toplam=$toplam+$i;
	 
	 
	}
   echo $toplam." ";
?>