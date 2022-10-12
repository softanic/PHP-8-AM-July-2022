<?php
	$conn=mysqli_connect("localhost","root","","php_bca");
	
	
	$q="select m.msg,u.name from msgs m join users u ON m.from_id=u.user_id";
	
	$q="SELECT AVG(from_id) FROM `msgs`";
	
	$result=mysqli_query($conn,$q);
	$count= mysqli_num_rows($result);
	
	while($row=mysqli_fetch_assoc($result))
	{
		//$q2="select * from users where user_id=".$row['from_id'];
		//$res2=mysqli_query($conn,$q2);
		//$user_data=mysqli_fetch_assoc($res2);
		//print_r($row);
		//echo $row['msg']."-sender=".$row['name']."<br>";
		echo ($row['AVG(from_id)']);
	}

?>