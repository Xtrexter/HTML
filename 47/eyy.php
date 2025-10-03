<?php

$hitabe = "Ey Türk Gençliği"; 

echo mb_substr($hitabe, 0, 2) . "<br>"; 
echo mb_substr($hitabe, 3, 4) . "<br>"; 
echo mb_substr($hitabe, 8) . "<br>"; 

?>
<?php



$mars = "İSTİKLÂL MARŞI


Korkma, sönmez bu şafaklarda yüzen al sancak;

Sönmeden yurdumun üstünde tüten en son ocak.

O benim milletimin yıldızıdır, parlayacak;

O benimdir, o benim milletimindir ancak.";


echo nl2br($mars);
?>

<?php

$ifade = "Teknoloji sayesinde herkesin kapısı, kocaman bir pencereye

dönüşebiliyor. Daniel Palmer";

$dizi = explode(" ", $ifade); 

print_r($dizi);
?>


<?php
$paragraf = "Önce bilgisayarın bir hesap makinesi olduğunu düşündük.
Sonra sayıları ASCII ile harflere nasıl çevireceğimizi öğrendik.
Bunun bir daktilo olduğunu düşündük. Sonra grafikleri keşfettik.
Bir televizyon olduğunu düşündük. World Wide Web(www) ile bunun bir broşür 
olduğunu anladık.
Douglas Adams";

$kelime_say = str_word_count($paragraf);
$cumle_say = preg_match_all('/[.!?]/', $paragraf);

echo "Paragrafta $kelime_say kelime ve $cumle_say cümle vardır.<br><hr>";

foreach (explode(".", $paragraf) as $index => $cumle) {
    if ($cumle = trim($cumle)) {
        echo ($index + 1) . " => $cumle<br>";
    }
}
?>









<?php

function myAbs($number) {

    if ($number < 0) {

        return -$number; 

    }

    return $number; 

}
echo myAbs(-6); 

echo myAbs(-15);

echo myAbs(2); 

?>
