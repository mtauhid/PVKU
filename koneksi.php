<?php
	
	$server		= "localhost"; // sesuaikan alamat server anda
	$user		= "root"; // sesuaikan user web server anda
	$password	= ""; // sesuaikan password web server anda
	$database	= "spk_varietaskedelai"; // sesuaikan database web server anda
	
	$connect = mysqli_connect($server, $user, $password, $database) or die ("Koneksi gagal!");
	
?>