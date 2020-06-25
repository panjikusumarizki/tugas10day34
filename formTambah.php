<!DOCTYPE html>
<html>
	<head>
		<title>Form Tambah</title>
	</head>
	
	<body>
		<form action="prosesTambah.php" method="post">
			<label>Nama Produk</label>
			<div><input type="text" name="nama_produk"></div>
			
			<label>Keterangan</label>
			<div><textarea name="keterangan"></textarea></div>
			
			<label>Harga</label>
			<div><input type="text" name="harga"></div>
			
			<label>Jumlah</label>
			<div><input type="text" name="jumlah"></div>
			
			<div>
				<input type="submit" name="tambah" value="Tambah">
			</div>
		</form>
	</body>
</html>