<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("location:login.php");
	}
	$user=$_SESSION['user'];
	
	echo "welcome ".$user['name']." to home page";
	
?>
<a href="logout.php">Logout</a>