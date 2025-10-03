<?php 

	function abi ($sayi1)
	{
	if($sayi1 < 0)
	{
		$toplam="-1";
	$toplam = $sayi1 * $toplam;
	
	echo $toplam;
	}
	else{
		echo $sayi1;
	}
	

	}
	
	$a=abi(-123);
	echo "<br>";
	echo "<br>";
	
	
		// |x5-x4y2+7√y-35| // 2|x+√xy+y|
			 $x=2;
			 $y=4;
		$islem=abs(pow($x,5)-(pow($x,4)*pow($y,2))+7*sqrt($y)-35);
			echo "Matematiksel işlemin sonucu:".$islem;
			
		echo "<br>";
		echo "<br>";
		
			for ($i=0; $i <10; $i++)
			{
				$dizi[$i]=rand(-500,500);
			}
				foreach($dizi as $sayac=>$değer)
				echo$sayac+1,"=>",$değer,"<br>";
				echo"<hr>";
			for($i=0; $i <10 ;$i++)
			{
				$mutlakdizi[$i]=abs($dizi[$i]);
			}
		for ($i=0; $i <10 ; $i++)
			 {
			 if(min($mutlakdizi)==abs($dizi[$i]))
			 {
			 echo "Sıfıra En Yakın Değer:".$dizi[$i]."<br>";
			 }
			 if(max($mutlakdizi)==abs($dizi[$i]))
			 {
			 echo "Sıfıra En Uzak Değer:".$dizi[$i]."<br>";
			 }
			 }
		
?>