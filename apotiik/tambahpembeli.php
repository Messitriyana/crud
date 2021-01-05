<!DOCTYPE html>
<a href="index.html" style="color:black" style="margin-left: 135;">&Lt; Back</a>
<html>
<body background="tujuh.jpg">
<head>
	<title>tambah data pembeli</title>
</head>
<body>
	<center>
		<h1>Tambah data pembeli</h1>
		<form method="post" action="simpantambahdata.php">
		<table>
			<p>
				ID Pembeli</br>
				  <input type="text" name="id" required />
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
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
		</form>
	</center>

</body>
</html>