<?php
	
	include_once ("koneksi.php");
	
	$id = $_GET['id'];
	
	$nama = $_POST['nama_produk'];
	$ket = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];
	
	$query = mysqli_query($koneksi, "UPDATE produk SET nama_produk = '$nama',
													 keterangan = '$ket',
													 harga = '$harga',
													 jumlah = '$jumlah'
													 WHERE id = '$id'");
	
	header("location: index.php");
	
?>