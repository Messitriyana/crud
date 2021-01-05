<html>

<?php 
	include_once ("konek.php");
	$perintah="SELECT * FROM data_windi";

	$hasil =mysqli_query($konek,$perintah);

?>
<html>
	<head>
		<title> Data Penyewa</title>
	</head>
	<body>
		
	<center>
		<h1>Data Penyewa</h1>
		<br>
			<a href="tambahpenyewa.php">Tambah Data Penyewa<a/>
		<br>
		<br>
		<table border="1" width="1000px">
			<tr>
				<th>ID Penyewa</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>Alamat</th>
				<th>Nama Barang</th>
				<th>Jenis Barang</th>
				<th>NO HP</th>
				<th>Jaminan</th>
				<th>Pinjam</th>
				<th>Edit</th>
				<th>Hapus</th>

			</tr>
			<?php while($data=mysqli_fetch_array($hasil)){ ?>
			<tr>
				<td><?php echo $data['id_penyewa']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['gender']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['jenis_barang']; ?></td>
				<td><?php echo $data['jaminan']; ?></td>
				<td><?php echo $data['no_hp']; ?></td>
				<td><?php echo $data['pinjam']; ?></td>
				<td><a href="editdatapenyewa.php?id=<?php echo $data["id_penyewa"]?>">Edit</a></td>
				<td><a href="hapusdatapenyewa.php?id=<?php echo $data["id_penyewa"]?>">Hapus</a></td>
				


			</tr>
		<?php } ?>
		</table>
	</center>
	</body>
	