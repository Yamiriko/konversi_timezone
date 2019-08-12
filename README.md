# konversi_timezone
Konversi waktu di indonesia

# Fungsinya
<pre>
function konversi_jakarta($tgl_waktu){ 	
		$datetime = new DateTime($tgl_waktu);
		$la_time = new DateTimeZone('Asia/Jakarta');
		$datetime->setTimezone($la_time);
		$jadi = $datetime->format('Y-m-d H:i:s');
		return $jadi;
	}
</pre>
	
# cara penggunaannya :
<pre>
$tanggal = "2018-12-07T14:00:00.306Z";
echo konversi_jakarta($tanggal);
</pre>
