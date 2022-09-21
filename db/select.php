<?php
echo time();
	$conn=mysqli_connect("localhost","root","","php_bca");
	$q="select * from users where is_deleted=0 ";
	$res=mysqli_query($conn,$q);
	$count= mysqli_num_rows($res);
	echo "<a href='insert-form.php'>Add New Record</a>";
	echo "<table border=1>";
	echo "<tr><th>photo</th><th>User Id</th><th>Name</th><th>Mobile no</th><th>email</th><th>gender</th><th>Action</th><th>update</th></tr>";
	while($row=mysqli_fetch_array($res))
	{
		//print_r($row);
		$photo='default.png';
		if($row['photo']!=NULL)
		{
			$photo=$row['photo'];
		}
		echo "<tr><td><img src='$photo' height=50 width=50>
		</td><td>{$row['user_id']}</td><td>".$row['name']."</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>
		<td><a onclick='return confirm(\" Are u sure want to delete this record? \");' href='delete.php?user_id={$row['user_id']}'>delete</a></td>
		<td><a onclick='return confirm(\" Are u sure want to delete this record? \");' href='update.php?user_id={$row['user_id']}'>update</a></td>
		
		</tr>";
		
	}
	
?>