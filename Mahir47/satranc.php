<?php
 satranc(8,8);
	function satranc($satir,$sutun)
	
	{
		
		echo "<table width=400 height=400 border=1>";
for($i=1;$i<=$satir;$i++) //satır
 {
 echo "<tr>";
 for($j=1;$j<=$sutun;$j++) //sütun
 {
 $kutu=$i+$j;
 if($kutu%2==1)
 { echo "<td bgcolor=black></td>"; }
 else
 { echo "<td></td>";}
 }
 echo "</tr>";
 }
echo "</table>";
}
		
	

	satranc();
	
?>