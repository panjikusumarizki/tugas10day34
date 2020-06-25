<?php
	include_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Produk</title>
	</head>
	
	<body>
		<a href="formTambah.php">Tambah Produk</a>
		
		<table border="1px">
			<tr>
				<th>No.</th>
				<th>Nama Produk</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Jumlah</th>
			</tr>
			
			<?php
				$query = mysqli_query($koneksi, 'SELECT * from produk');
				
				$no = 1;
				
				while($row = mysqli_fetch_array($query)){
				
					echo "<tr>";
					echo "<td>$no</td>";
					echo "<td>$row[nama_produk]</td>";
					echo "<td>$row[keterangan]</td>";
					echo "<td>$row[harga]</td>";
					echo "<td>$row[jumlah]</td>";
					echo "<td><a href='formEdit.php?id=$row[id]'>Edit</a>
							<a href='prosesHapus.php?id=$row[id]'>Hapus</a></td>";
					
					$no++;
				}
			?>
		</table>
	</body>
</html>