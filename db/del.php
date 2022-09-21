<?php
	$user_id=$_REQUEST['user_id'];
	$conn=mysqli_connect("localhost","root","","php_bca");
	$q='delete from users where user_id='.$user_id;
	$res=mysqli_query($conn,$q);
	if(mysqli_affected_rows($conn)>0)
	{
		echo 'record deleted';
	}else{
		echo 'fail to delete';
	}

?>