<?php
	include_once("konek.php");
	$idpegawai=$_GET['id'];

	$perintah="SELECT*FROM gaji_pegawai WHERE id_pegawai=".$idpegawai;

	$hasil=mysqli_query($konek,$perintah);

?>
<h1>Edit Gaji Pegawai</h1>
		<form method="post" action="simpaneditgajipegawai.php">
		<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<table>
			<tr>
				<td>ID Pegawai</td>
				<td><input type="text" name="id" value="<?php echo $data['id_pegawai']?>"/></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan" value="<?php echo $data['jabatan']?>"/></td>
			</tr>
			<tr>
				<td>Gaji</td>
				<td><input type="text" name="gaji" value="<?php echo $data['gaji']?>"/></td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" value="EDIT"></td>
			</tr>
		</table>
		<?php } ?>
		</form>