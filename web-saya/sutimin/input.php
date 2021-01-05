<?php 
	include_once ("index.php");
	$perintah="SELECT * FROM obat";

	$hasil =mysqli_query($index,$perintah);

?>
<html>
	<head>
		<title> Data Obat</title>
	</head>
	<body>
		
	<center>
		<h1>Data Obat</h1>
		<br>
			<a href="tambahpegawai.php">Tambah Data Obat<a/>
		<br>
		<br>
		<table border="1" width="1000px">
			<tr>
				<th>Nama</th>
				<th>Jenis</th>
				<th>Harga</th>

			</tr>
			<?php while($data=mysqli_fetch_array($hasil)){ ?>
			<tr>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jenis']; ?></td>
				<td><?php echo $data['harga']; ?></td>
				<td><a href="editdatapegawai.php?id=<?php echo $data["id_pegawai"]?>">Edit</a></td>
				<td><a href="hapusdatapegawai.php?id=<?php echo $data["id_pegawai"]?>">Hapus</a></td>
				


			</tr>
		<?php } ?>
		</table>
	</center>
	</body>
	