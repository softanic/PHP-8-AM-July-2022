<?php
	$conn=mysqli_connect("localhost","root",'','php_bca');
	//mysqli_connect("host","username",'password','db name');
	/*if($conn)
	{
		echo 'connected';
	}else{
		echo 'not connected';
	}*/
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$gender=$_REQUEST['gender'];
	$password=MD5($_REQUEST['password']);
	
	$q1="select * from users where mobile_no='$mobile'";
	$res=mysqli_query($conn,$q1);
	if(mysqli_num_rows($res)<=0)
	{

		$tmp_name=$_FILES['photo']['tmp_name'];
		$dest='photos/softanic-'.$_FILES['photo']['name'];
		move_uploaded_file($tmp_name,$dest);
		//$q="insert into users (user_id,name,email_id,mobile_no,gender,password) values (NULL,'abc','abc@gmail.com','123456','female','abcd')";
		$q="insert into users values (NULL,'$name','$mobile','$email','$gender','$password','$dest',0)";
		
		$result=mysqli_query($conn,$q);
		if($result)
		{
			//echo "record inserted <br>";
			//echo 'record inserted at id : '. mysqli_insert_id($conn);
			echo "<script>alert('Record Inserted successfully');window.location='select.php';</script>";
			
		}else{
			echo 'Fail to insert, Please try again';
			echo mysqli_error($conn);
		}
	}else{
			echo "<script>alert('Record with same mobile no already exist. Please login');window.location='login.php';</script>";
		
	}

?>