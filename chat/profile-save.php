<?php
	$mobile_number=$_REQUEST['mobile_number'];
	$password=md5($_REQUEST['password']);
	$name=$_REQUEST['name'];
	$photo='photos/'.$_FILES['photo']['name'];
	$photo_tmp=$_FILES['photo']['tmp_name'];
	include 'db.php';
	
	
	$q="insert into users (name,mobile_no,password,photo) values('$name','$mobile_number','$password','$photo')";
	$res=mysqli_query($conn,$q);
	if($res)
	{
		session_start();
		$_SESSION['user']=mysqli_insert_id($conn);
		header("location:index.php");
	}else{
		echo mysqli_error($conn);
	}
	
	
?>