<?php
session_start();
include("dbconnect.php");

$uname = "";
$pwd = "";
$errorMessage = "";
$num_rows = 0;

$uname = $_POST['username'];
$pwd = $_POST['password'];

$uname = htmlspecialchars($uname);
$pwd = htmlspecialchars($pwd);

$sql = "SELECT * from register where email = '$uname' AND pword = '$pwd'";
$result = mysql_query($sql);
if($result)
{ 
	$num_rows = mysql_num_rows($result);
	if($num_rows > 0)
	{
		$_SESSION['uname']=$uname;
		
		$errorMessage = "Logged in";

			//echo "Welcome"." ".$uname;
			header('location:index.php');
	
	}
	else 
	{
		$errorMessage = "Invalid Login";
		echo "Invalid Login";
	}
}
?>