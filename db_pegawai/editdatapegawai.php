<?php
	include_once("konek.php");
	$idpegawai=$_GET['id'];

	$perintah="SELECT*FROM data_pegawai WHERE id_pegawai=".$idpegawai;

	$hasil=mysqli_query($konek,$perintah);

?>
<h1>Edit Data Pegawai</h1>
		<form method="post" action="simpaneditpegawai.php">
		<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<table>
			<tr>
				<td>ID Pegawai</td>
				<td><input type="text" name="id" value="<?php echo $data['id_pegawai']?>"/></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama']?>"/></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan" value="<?php echo $data['jabatan']?>"/></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat']?>"/></td>
			</tr>

				<td> </td>
				<td><input type="submit" value="EDIT"></td>
			</tr>
		</table>
		<?php } ?>
		</form>