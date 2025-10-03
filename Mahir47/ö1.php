<?php

$iban_numarasi = "TR110001100000111110011101"; 

$bol = mb_str_split($iban_numarasi, 4); 


foreach ($bol as $eleman) {

    echo $eleman . " "; 

}
?>