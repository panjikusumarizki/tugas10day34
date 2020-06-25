<?php
	
	include_once ("koneksi.php");
	
	$id = $_GET['id'];
	
	$query = mysqli_query($koneksi, "DELETE from produk WHERE id = '$id'");
	
	header("location: index.php");
	
?>