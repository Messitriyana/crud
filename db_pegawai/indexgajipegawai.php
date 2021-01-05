<?php 
	include_once ("konek.php");
	$perintah="SELECT * FROM gaji_pegawai";

	$hasil =mysqli_query($konek,$perintah);

?>
<html>
	<head>
		<title> Gaji Pegawai</title>
	</head>
	<body>
		
	<center>
		<h1>Gaji Pegawai</h1>
		<br>
			<a href="tambahgajipegawai.php">Tambah Gaji Pegawai<a/>
		<br>
		<br>
		<table border="1" width="350px">
			<tr>
				<th>ID Jabatan</th>
				<th>Jabatan</th>
				<th>Gaji</th>
				<th>Edit</th>
				<th>Hapus</th>
				
			</tr>
			<?php while($data=mysqli_fetch_array($hasil)){ ?>
			<tr>
				<td><?php echo $data['id_pegawai']; ?></td>
				<td><?php echo $data['jabatan']; ?></td>
				<td><?php echo $data['gaji']; ?></td>
				<td><a href="editgajipegawai.php?id=<?php echo $data["id_pegawai"]?>">Edit</a></td>
				<td><a href="hapusgajipegawai.php?id=<?php echo $data["id_pegawai"]?>">Hapus</a></td>
				
				


			</tr>
		<?php } ?>
		</table>
	</center>
	</body>
	