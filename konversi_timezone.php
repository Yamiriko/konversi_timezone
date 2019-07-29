<?php
	function konversi_jakarta($tgl_waktu){ 	
		$datetime = new DateTime($tgl_waktu);
		$la_time = new DateTimeZone('Asia/Jakarta');
		$datetime->setTimezone($la_time);
		$jadi = $datetime->format('Y-m-d H:i:s');
		return $jadi;
	}
	
	function konversi_pontianak($tgl_waktu){ 	
		$datetime = new DateTime($tgl_waktu);
		$la_time = new DateTimeZone('Asia/Pontianak');
		$datetime->setTimezone($la_time);
		$jadi = $datetime->format('Y-m-d H:i:s');
		return $jadi;
	}
	
	function konversi_ujung_pandang($tgl_waktu){ 	
		$datetime = new DateTime($tgl_waktu);
		$la_time = new DateTimeZone('Asia/Ujung_Pandang');
		$datetime->setTimezone($la_time);
		$jadi = $datetime->format('Y-m-d H:i:s');
		return $jadi;
	}
	
	function konversi_jayapura($tgl_waktu){ 	
		$datetime = new DateTime($tgl_waktu);
		$la_time = new DateTimeZone('Asia/Jayapura');
		$datetime->setTimezone($la_time);
		$jadi = $datetime->format('Y-m-d H:i:s');
		return $jadi;
	}
?>