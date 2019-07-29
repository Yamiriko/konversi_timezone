<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Konversi Timezone PHP</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
</head>
<body>
	<!--
	CV.MediaSoft Solusindo
	Call/WA/Telegram : 0823 8694 4596
	Facebook : https://www.facebook.com/MediasoftSolusindoPKU/
	Website : https://mediasoftsolusindo.com
	-->
	<center><b>Konversi Timezone PHP</b></center>
<?php
	require_once "konversi_timezone.php";
	$tanggal = "2018-12-07T14:00:00.306Z";
	echo "<center>";
	echo '<p>Data Tanggal dan Waktu Format UTC : '.$tanggal.'.</p>';
	echo '<p>Tanggal dan Waktu Format Jakarta : '.konversi_jakarta($tanggal).'.</p>';
	echo '<p>Tanggal dan Waktu Format Pontianak : '.konversi_pontianak($tanggal).'.</p>';
	echo '<p>Tanggal dan Waktu Format Ujung Pandang : '.konversi_ujung_pandang($tanggal).'.</p>';
	echo '<p>Tanggal dan Waktu Format Jayapura : '.konversi_jayapura($tanggal).'.</p>';
	echo "</center>";
?>
	<center><b>Dikembangkan Oleh Jean Riko Kurniawan Putra CV.MediaSoft Solusindo</b></center>
</body>
</html>