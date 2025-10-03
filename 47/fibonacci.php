<?php

function fibonacci($x) {
    $a = 0; 
    $b = 1; 

    
    for ($i = 0; $i < $x; $i++) {
        echo $a . " "; 
        $next = $a + $b; 
        $a = $b;
        $b = $next; 
    }
}

$x = 11; 
fibonacci($x);

?>
