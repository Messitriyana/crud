<?php
	include_once("konek.php");
	$idjabatan=$_GET['id'];

	$perintah="SELECT*FROM jabatan_pegawai WHERE id_jabatan=".$idjabatan;

	$hasil=mysqli_query($konek,$perintah);

?>
<h1>Edit Jabatan Pegawai</h1>
		<form method="post" action="simpaneditjabatanpegawai.php">
		<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<table>
			<tr>
				<td>ID Jabatan</td>
				<td><input type="text" name="id" value="<?php echo $data['id_jabatan']?>"/></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan" value="<?php echo $data['jabatan']?>"/></td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="submit" value="EDIT"></td>
			</tr>
		</table>
		<?php } ?>
		</form>