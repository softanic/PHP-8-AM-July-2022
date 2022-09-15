<?php
	$conn=mysqli_connect("localhost","root","","php_bca");
	$q="select * from users where is_deleted=0 ";
	$res=mysqli_query($conn,$q);
	$count= mysqli_num_rows($res);
	echo "<a href='insert-form.php'>Add New Record</a>";
	echo "<table border=1>";
	echo "<tr><th>User Id</th><th>Name</th><th>Mobile no</th><th>email</th><th>gender</th><th>Action</th></tr>";
	while($row=mysqli_fetch_array($res))
	{
		//print_r($row);
		echo "<tr><td>{$row['user_id']}</td><td>".$row['name']."</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>
		<td><a onclick='return confirm(\" Are u sure want to delete this record? \");' href='delete.php?user_id={$row['user_id']}'>delete</a></td></tr>";
		
	}
	
?>