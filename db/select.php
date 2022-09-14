<?php
	$conn=mysqli_connect("localhost","root","","php_bca");
	$q="select * from users  ";
	$res=mysqli_query($conn,$q);
	$count= mysqli_num_rows($res);
	echo "<a href='insert-form.php'>Add New Record</a>";
	echo "<table border=1>";
	echo "<tr><th>User Id</th><th>Name</th><th>Mobile no</th><th>email</th><th>gender</th></tr>";
	while($row=mysqli_fetch_array($res))
	{
		//print_r($row);
		echo "<tr><td>{$row['user_id']}</td><td>".$row['name']."</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
		
	}
	
?>