<?php
$x = 2;
$y = 4;
$result = abs(-$x**5 - $x**4 + $y**2 + 7 * sqrt($y) - 35) / (2 * ($x + sqrt($x * $y) + $y));
echo "Sonuç: " . $result;
?>