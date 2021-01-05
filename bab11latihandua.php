<?php
ob_start();
$host= "localhost";//Host name
$username="root";//Mysql username
$password="";//Mysql password
$db_name="db_personil";//Database name
$tbl_name="members";//Table name
//Connect to server and select database.
mysql_connect ("$host","$username","$password") or die ("cannot connect");
mysql_select_db ("$db_name") or die ("cannot select DB");
//Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$sql="SELECT * FROM $tbl_name WHERE username= '$myusername' and
password='$mypassword'";
$result=mysql_query ($sql);
//echo $sql;echo exit;
//Mysql_num_row is counting table row
$count= mysql_num_rows ($result);
//If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
//Register $myusername, $mypassword and redirect to file "login_success.php"
//echo "Username dan password anda valid";
session_register ("myusername");
session_register ("mypassword");

header ("location:bab11latihan3.php");
}
else{
	echo "Wrong Username or Password";
}
ob_end_flush ();
?>