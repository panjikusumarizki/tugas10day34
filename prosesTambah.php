<?php
	
	include_once ("koneksi.php");
	
	$nama = $_POST['nama_produk'];
	$ket = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];
	
	$query = mysqli_query($koneksi, "INSERT INTO produk (nama_produk,keterangan,harga,jumlah) VALUES ('$nama','$ket','$harga','$jumlah')");
	
	header("location: index.php");
	
?>