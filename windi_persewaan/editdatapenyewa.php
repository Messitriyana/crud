<?php
	include_once("konek.php");
	$idpenyewa=$_GET['id'];

	$perintah="SELECT*FROM data_windi WHERE id_penyewa=".$idpenyewa;

	$hasil=mysqli_query($konek,$perintah);

?>
<center>
<h1>Edit Data Penyewa</h1>
		<form method="post" action="simpaneditpenyewa.php">
		<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<table>
				<p>
				ID Penyewa</br>
				  <input type="text" name="id" required />
        </p>

		<p>
            Nama <br />
            <input type="text" name="nama" required />
        </p>
        
        <p>
            Gender <br />
            <input type="text" name="gender" required />
        </p>

        
        <p>
            Alamat<br />
            <textarea name="alamat" cols="50" required/></textarea>
        </p>

        <p>
            Nama Barang<br />
            <input type="text" name="nama_barang" required/>
        </p>

        <p>
            Jenis Barang<br />
            <input type="text" name="jenis_barang" required/>
        </p>
        
        <p>
            No HP<br />
            <input type="text" name="no_hp" required />
        </p>

        <p>
            Jaminan<br />
            <input type="text" name="jaminan" required />
        </p>

        <p>
            Pinjam<br />
            <input type="text" name="pinjam" required />
        </p>
			
				<td> </td>
				<td><input type="submit" value="EDIT"></td>
			</tr>
		</table>
		</center>
		<?php } ?>

		</form>