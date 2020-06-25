<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "arkademy";
	
	$koneksi = mysqli_connect($server, $username, $password, $database) OR DIE ("Koneksi Gagal");
	
?>