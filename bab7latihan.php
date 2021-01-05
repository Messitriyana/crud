<?php
Session_start();
If(isset($_POST['login']))
{
	$user = $_POST['user'];
	$passwd = $_POST['passwd'];
	If ($user == "user" && $passwd="passuser"){
	  $_SESSION['login']=$user;
	  Echo "<h1>anda berhasil login</h1>";
	  Echo "<h2>klik<a href='lat_session2.php'>disini(lat_session2.php)</a>";
	}

}else{
}
?>

<html>
 <head>
  <tittle>login here...</title>
 </head>
 <body>
  <form action="" method="post">
  <h2>login disini </h2>
 Username : <input type="text" name="user"><br>
 Password : <input type="password" name="passwd"><br>
</form>
</body>
</html>