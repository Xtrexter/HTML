<?php
function mypow($taban, $us) {
    
    if ($us < 0) {
        return 1 / mypow($taban, -$us);
    }
    if (floor($us) == $us) {
        $sonuc = 1;
        for ($i = 0; $i < $us; $i++) {
            $sonuc *= $taban;
        }
        return $sonuc;
    } else {
        
        return exp($us * log($taban));
    }
}

echo mypow(5, 3) . "\n";
	
echo mypow(10, 0) . "\n";

echo mypow(7, -2.5) . "\n";
 
echo mypow(2, 10) . "\n";

echo mypow(9, 0.5) . "\n";
  
?>