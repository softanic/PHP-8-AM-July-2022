 <?php
		$data=$_REQUEST['data'];
		$conn=mysqli_connect("localhost","root","","php_bca");
		$q="select * from states_data where village like '$data%'";
		$res=mysqli_query($conn,$q);
		echo "<ol>";
		while($d=mysqli_fetch_array($res))
		{
			echo "<li>". $d['village']."-". $d['taluka']."-". $d['district']."-". $d['state']."</li>";
		}
		echo "</ol>"
		?>