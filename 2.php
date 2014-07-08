<html>
<head>
	<script>
function validation(){
var y=document.forms['form3']['email'].value;
if(y == null || y == ""){
	alert("Email and Password field cannot be BLANK");
	return false;
}

}

	</script>
	
<body style="background-color:#6A5ACD;">

<?php
include('connection.php');
$a=$_REQUEST['emailid'];
$b=$_REQUEST['pass1'];
$c=$_REQUEST['mobi'];

$d=mysql_query("INSERT into server(email, password, mobile)
                values('".$a."', '".$b."', '".$c."')");





?>



<br>
<div id="header" style="width:1100;height:150">
<div id="sitename" style="float:left;"><b style="box-shadow:25px 25px 25px black;font-size:42px;color:white;">Social Network</b></div>






</div>

<div id="mid" style="width:1350;height:350;background-color:white;">
<br><br><br>

<form action="3.php" name="form3" onsubmit="return validation()">
<b style="box-shadow:25px 25px 25px black;font-size:25px;color:black;margin-left:477;">Email Id</b>
<input type="text" name="email" style="margin-left:35;box-shadow:11px 11px 11px black;color:black;"><br><br>

<b style="box-shadow:25px 25px 25px black;font-size:25px;color:black;margin-left:477">Password</b>
<input type="password" name="pass" style="margin-left:21;box-shadow:11px 11px 11px black;;color:black;"><br><br>
<input type="submit" name="submit" value="submit" style="margin-left:607;box-shadow:11px 11px 11px black;;color:black;">
</form>


</div>


</body>


</html>