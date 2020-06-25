<?php
	include_once("koneksi.php");
	
	$id = $_GET['id'];
	
	$query = mysqli_query($koneksi, "SELECT * from produk WHERE id='$id'");
	$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form Edit Sewa</title>
	</head>
	
	<body>
		<form action="prosesEdit.php?id=<?php echo $id; ?>" method="post">
			<label>Nama Produk</label>
			<div><input type="text" name="nama_produk" value="<?php echo $row['nama_produk'] ?>"></div>
			
			<label>Keterangan</label>
			<div><input type="text" name="keterangan" value="<?php echo $row['keterangan'] ?>"></div>
			
			<label>Harga</label>
			<div><input type="text" name="harga" value="<?php echo $row['harga'] ?>"></div>
			
			<label>Jumlah</label>
			<div><input type="text" name="jumlah" value="<?php echo $row['jumlah'] ?>"></div>
			
			<div>
				<input type="submit" name="update" value="Update Data">
			</div>
		</form>
	</body>
</html>