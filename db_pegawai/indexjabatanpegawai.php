<?php 
	include_once ("konek.php");
	$perintah="SELECT * FROM jabatan_pegawai";

	$hasil =mysqli_query($konek,$perintah);

?>
<html>
	<head>
		<title> Jabatan Pegawai</title>
	</head>
	<body>
		
	<center>
		<h1>Jabatan Pegawai</h1>
		<br>
			<a href="tambahjabatanpegawai.php">Tambah Jabatan Pegawai<a/>
		<br>
		<br>
		<table border="1" width="350px">
			<tr>
				<th>ID Jabatan</th>
				<th>Jabatan</th>
				<th>Edit</th>
				<th>Hapus</th>
				
			</tr>
			<?php while($data=mysqli_fetch_array($hasil)){ ?>
			<tr>
				<td><?php echo $data['id_jabatan']; ?></td>
				<td><?php echo $data['jabatan']; ?></td>
				<td><a href="editjabatanpegawai.php?id=<?php echo $data["id_jabatan"]?>">EDIT</a></td>
				<td><a href="hapusjabatanpegawai.php?id=<?php echo $data["id_jabatan"]?>">Hapus</a></td>
				
				


			</tr>
		<?php } ?>
		</table>
	</center>
	</body>
	