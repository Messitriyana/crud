<html>

<?php 
	include_once ("konek.php");
	$perintah="SELECT * FROM Obat";

	$hasil =mysqli_query($konek,$perintah);

?>
<html>
	<head>
		<title> Data Pembeli</title>
	</head>
	<body>
		
	<center>
		<h1>Data Pembeli</h1>
		<br>
			<a href="tambahpembeli.php">Tambah Data Pembeli<a/>
		<br>
		<br>
		<table border="1" width="1000px">
			<tr>
				<th>ID Pembeli</th>
				<th>nama</th>
				<th>jenis</th>
				<th>harga</th>
				<th>Edit</th>
				<th>Hapus</th>

			</tr>
			<?php while($data=mysqli_fetch_array($hasil)){ ?>
			<tr>
				<td><?php echo $data['id_pembeli']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jenis']; ?></td>
				<td><?php echo $data['harga']; ?></td>
				<td><a href="editdatapembeli.php?id=<?php echo $data["id_pembeli"]?>">Edit</a></td>
				<td><a href="hapusdatapembeli.php?id=<?php echo $data["id_pembeli"]?>">Hapus</a></td>
				


			</tr>
		<?php } ?>
		</table>
	</center>
	</body>
	