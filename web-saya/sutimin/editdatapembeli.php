<?php
	include_once("konek.php");
	$Idpembeli=$_GET['Id'];

	$perintah="SELECT*FROM tabel_obat WHERE Id_pembeli=".$Idpembeli;

	$hasil=mysqli_query($konek,$perintah);

?>
<center>
<h1>Edit Data pembeli</h1>
		<form method="post" action="simpaneditpembeli.php">
		<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<table>
				<p>
				Id Pembeli</br>
				  <input type="text" name="Id" required />
        </p>

		<p>
            nama <br />
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