<?php 
	include "koneksi.php";
	
	$query = mysqli_query($connect, "SELECT * FROM v_bobot_akhir a, tb_kriteria b, tb_skalakriteria c WHERE a.id_kriteria=b.id_kriteria AND a.id_skalakriteria=c.id_skalakriteria ORDER BY a.id_kriteria ASC");
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysqli_close($connect);
	
?>