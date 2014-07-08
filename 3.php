<?php
include('connection.php');
$q=$_REQUEST['email'];
$w=$_REQUEST['pass'];
$e=mysql_query("SELECT * FROM server WHERE email='".$q."' AND password='".$w."'");



if(mysql_num_rows($e) != 0) // User not found. So, redirect to login_form again.
{
header('Location: 4.php');
}
else{
	header('Location: 1.html');
}


?>
