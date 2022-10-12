<?php
		$state=$_REQUEST['state'];
		$conn=mysqli_connect("localhost","root","","php_bca");
		$q="select distinct(district) from states_data where state='$state'";
		$res=mysqli_query($conn,$q);
		while($d=mysqli_fetch_array($res))
		{
			echo "<option>". $d['district']."</option>";
		}
		?>