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
	$password=$_REQUEST['password'];
	
	//$q="insert into users (user_id,name,email_id,mobile_no,gender,password) values (NULL,'abc','abc@gmail.com','123456','female','abcd')";
	$q="insert into users values (NULL,'$name','$mobile','$email','$gender','$password')";
	
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

?>