<?php

include("dbconnect.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$addr = $_POST['addr'];
$uname = $_POST['email'];
$pwd = $_POST['pword'];

$sql = "insert into register (fname, lname, gender, addr, email, pword) values
	('$fname','$lname','$gender','$addr','$uname','$pwd')";
	
		/*To check insert query correction*/
	if(!mysql_query($sql, $con))
	{
		//echo "Querry is correct";
	}
	
	else
		echo "".mysql_error();
	
header("Location:index.php");
?>



