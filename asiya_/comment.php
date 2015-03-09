<?php

include("dbconnect.php");

$first_name = $_POST['first_name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$sql = "insert into comments (first_name, email,comments) values
	('$first_name','$email','$comments')";
	
		/*To check insert query correction*/
	if(!mysql_query($sql, $con))
	{
		//echo "Querry is correct";
	}
	
	else
		echo "".mysql_error();
	
header("Location:join.php");
?>
