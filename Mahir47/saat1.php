<?php
	date_default_timezone_set('Europe/Istanbul');
	$dogum_tarihi = mktime(0, 0, 0, 8, 4, 2008);

$suan = time();
$gecen_zaman = $suan - $dogum_tarihi;
		echo "Bugün = " . date('d.m.Y H:i:s', $suan) . "<br>";

		echo "Doğum günü = " . date('d.m.Y H:i:s', $dogum_tarihi) . "<br><hr>";

		echo "Geçen Yıl = " . round($gecen_zaman / (60 * 60 * 24 * 365)) . " yıl<br>";

		echo "Geçen Ay = " . round($gecen_zaman / (60 * 60 * 24 * 30)) . " ay<br>";

		echo "Geçen Hafta = " . round($gecen_zaman / (60 * 60 * 24 * 7)) . " hafta<br>";

		echo "Geçen Gün = " . round($gecen_zaman / (60 * 60 * 24)) . " gün<br>";

		echo "Geçen Saat = " . round($gecen_zaman / (60 * 60)) . " saat<br>";

		echo "Geçen Dakika = " . round($gecen_zaman / 60) . " dk<br>";

		echo "Geçen Saniye = " . $gecen_zaman . " sn<br>";

?>