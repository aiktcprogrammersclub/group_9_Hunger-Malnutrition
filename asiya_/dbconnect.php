<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "mal";

$con = mysql_connect($host,$user,$pass);

if(!$con)
{
	die("Connection failed".mysql_error($con));
}


mysql_select_db($db);

if(!$db)
{
	die("Error Connection to database".mysql_error($db));
}

	

?>
