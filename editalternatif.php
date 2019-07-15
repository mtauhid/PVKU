<?php
	include "koneksi.php";
	
	$id_alternatif 	= $_POST['id_alternatif'];
	
	class emp{}
	
	if (empty($id)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error Mengambil Data"; 
		die(json_encode($response));
	} else {
		$query 	= mysqli_query($connect,"SELECT * FROM tb_alternatif WHERE id_alternatif='".$id_alternatif."'");
		$row 	= mysqli_fetch_array($query);
		
		if (!empty($row)) {
			$response = new emp();
			$response->success = 1;
			$response->id_alternatif = $row["id_alternatif"];
			$response->nama_alternatif = $row["nama_alternatif"];
			$response->status = $row["status"];
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error Mengambil Data";
			die(json_encode($response)); 
		}	
	}
?>