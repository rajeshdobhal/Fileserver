<?php
$localhost="localhost";
$root="root";
$password="";
$dbhandle=mysql_connect($localhost, $root, $password)
or die("could not connect");
$db="kryptonites";
mysql_select_db($db, $dbhandle)
or die("could not connect");
?>