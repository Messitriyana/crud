<!DOCTYPE html>
<a href="index.html" style="color:black" style="margin-left: 135;">&Lt; Back</a>
<html>
<body background="enam.jpg">
<?php 
	include_once ("konek.php");
	$perintah="SELECT * FROM tb_obat";

	$hasil =mysqli_query($konek,$perintah);

?>
<html>
	<head>
		<title> Apotek_indah</title>
	</head>
	<body>
		
	<center>
		<h1>Apotek_indah</h1>
		<br>
			<a href="tambahpembeli.php">Tambah Data obat<a/>
		<br>
		<br>
		<table border="1" width="1000px">
			<tr>
				<th>ID Pembeli</th>
				<th>Nama</th>
				<th>jenis</th>
				<th>harga</th>
				<th>Edit</th>
				<th>Hapus</th>

			</tr>
			<?php while($data=mysqli_fetch_array($hasil)){ ?>
			<tr>
				<td><?php echo $data['Id_pembeli']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jenis']; ?></td>
				<td><?php echo $data['harga']; ?></td>
				<td><a href="editdatapembeli.php?id=<?php echo $data["Id_pembeli"]?>">Edit</a></td>
				<td><a href="hapusdatapembeli.php?id=<?php echo $data["Id_pembeli"]?>">Hapus</a></td>
				


			</tr>
		<?php } ?>
		</table>
	</center>
	</body>
	