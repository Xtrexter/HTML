<?php

satrancTahtasiOlustur(8, 8);

function satrancTahtasiOlustur($satir, $sutun) {

   

    echo "<table width='400' height='400' border='1'>";

    for ($i = 1; $i <= $satir; $i++) {

        echo '<tr>';

        for ($j = 1; $j <= $sutun; $j++) { 

            $kutu = $i + $j;

            if ($kutu % 2 == 1) {

                echo '<td bgcolor="black"></td>';

            } else {

                echo '<td></td>';

            }

        }

        echo '</tr>';

    }

    echo '</table>';

}

?>