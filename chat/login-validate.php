<?php
$mobile_number=$_REQUEST['mobile_number'];
$password=md5($_REQUEST['password']);
include 'db.php';
$q="select * from users where mobile_no='$mobile_number' and password='$password'";
$res=mysqli_query($conn,$q);
if(mysqli_num_rows($res)>0)
{
	//login success
	$user_data=mysqli_fetch_array($res);
	session_start();
	$_SESSION['user']=$user_data['user_id'];
	$_SESSION['user_data']=$user_data;
	header('location:index.php');
}
else{
	//login fail
	echo "<script>alert('invalid username/password'); window.location='login.php';</script>";
}

?>