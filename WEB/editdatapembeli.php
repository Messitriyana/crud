<?php
	include_once("konek.php");
	$idpembeli=$_GET['id'];

	$perintah="SELECT*FROM Obat WHERE id_pembeli=".$idpembeli;

	$hasil=mysqli_query($konek,$perintah);

?>
<center>
<h1>Edit Data Pembeli</h1>
		<form method="post" action="simpaneditpembeli.php">
		<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<table>
				<p>
				ID Pembeli</br>
				  <input type="text" name="id" required />
        </p>

		<p>
            Nama <br />
            <input type="text" name="nama" required />
        </p>
        
        <p>
            jenis <br />
            <input type="text" name="jenis" required />
        </p>

        
        <p>
            harga<br />
            <textarea name="harga" cols="50" required/></textarea>
        </p>

			
				<td> </td>
				<td><input type="submit" value="EDIT"></td>
			</tr>
		</table>
		</center>
		<?php } ?>

		</form>