<?php 
	include_once ("konek.php");
	$perintah="SELECT * FROM data_pegawai";

	$hasil =mysqli_query($konek,$perintah);

?>
<html>
	<head>
		<title> Data Pegawai</title>
	</head>
	<body>
		
	<center>
		<h1>Data Pegawai</h1>
		<br>
			<a href="tambahpegawai.php">Tambah Data Pegawai<a/>
		<br>
		<br>
		<table border="1" width="1000px">
			<tr>
				<th>ID Pegawai</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Alamat</th>
				<th>Edit</th>
				<th>Hapus</th>

			</tr>
			<?php while($data=mysqli_fetch_array($hasil)){ ?>
			<tr>
				<td><?php echo $data['id_pegawai']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jabatan']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><a href="editdatapegawai.php?id=<?php echo $data["id_pegawai"]?>">Edit</a></td>
				<td><a href="hapusdatapegawai.php?id=<?php echo $data["id_pegawai"]?>">Hapus</a></td>
				


			</tr>
		<?php } ?>
		</table>
	</center>
	</body>
	