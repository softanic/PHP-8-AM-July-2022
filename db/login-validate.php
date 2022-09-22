 <?php
	session_start();
	$mobile_no=$_REQUEST['mobile_no'];
	$password=$_REQUEST['password'];
	
	include 'db.php';
	$q="select * from users where mobile_no='$mobile_no' and password='$password'";
	$res=mysqli_query($conn,$q);
	if(mysqli_num_rows($res)>0)
	{	$user=mysqli_fetch_array($res);
		
		$_SESSION['user']=$user;
		
		header("location:home.php");
	}else{
		echo "<script>alert('Invalid username/password. Please try again');window.history.back();</script>";
	}
	
 ?>