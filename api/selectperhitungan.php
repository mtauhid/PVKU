<?php 
	include "koneksi.php";
	
	$query = mysqli_query($connect, "SELECT * FROM v_vektor_v a, tb_alternatif b WHERE a.id_alternatif=b.id_alternatif ORDER BY a.vektor_v DESC");
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysqli_close($connect);
	
?>