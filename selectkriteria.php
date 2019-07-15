<?php 
	include "koneksi.php";
	
	$query = mysqli_query($connect, "SELECT id_kriteria, nama_kriteria, jenis_kriteria FROM tb_kriteria ORDER BY id_kriteria ASC");
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysqli_close($connect);
	
?>