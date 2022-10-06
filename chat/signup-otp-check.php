 <?php
	session_start();
	$otp=$_SESSION['otp'];
	$user_otp=$_REQUEST['otp'];
	$mobile_number=$_REQUEST['mobile_number'];
	$_SESSION['mobile_number']=$mobile_number;
	
	if($otp==$user_otp)
	{
		unset($_SESSION['otp']);
		
		header("location:profile-create.php");
	}else{
		$_SESSION['msg']="Invalid OTP";
	
		header("location:signup-otp.php");
	}
 ?>