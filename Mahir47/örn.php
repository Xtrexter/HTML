 <?php

function faktoriyel($sayi) {

    if ($sayi < 0) {

        return "Negatif sayının faktöriyeli hesaplanamaz.";

    } elseif ($sayi == 0) {

        return 1; 

    } else {

        $faktoriyel = 1;

        for ($i = 1; $i <= $sayi; $i++) {

            $faktoriyel *= $i;

        }

        return $faktoriyel;
    }

}
		$sayi = 5; 
					$sonuc = faktoriyel($sayi);

					echo "$sayi sayısının faktöriyeli: $sonuc";

?>