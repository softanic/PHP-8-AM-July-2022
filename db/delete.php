<!-- <html>
	<head>
	
	</head>
	<body>
		
		<form action='delete.php' method='get'>
			<select name='user_id'>
				<?php
					$conn=mysqli_connect('localhost','root','','php_bca');
					$q='select * from users';
					$result=mysqli_query($conn,$q);
					while($row=mysqli_fetch_array($result))
					{
				
					echo "<option value='{$row['user_id']}'>{$row['user_id']} - {$row['name']}</option>";
				
					}
				?>
			</select>
			<input type='submit' name='submit'>
			
		</form>
	</body>

</html>
-->
<?php
	/*if(isset($_REQUEST['submit']))
	{
		*/
		$user_id=$_REQUEST['user_id'];
		//$q='delete from users where user_id='.$user_id;
		$q='update users set is_deleted=1 where user_id='.$user_id;
		$res=mysqli_query($conn,$q);
		if(mysqli_affected_rows($conn)>0)
		{
			echo '<script>alert("Record deleted.");window.location="select.php";</script>';
		}else{
			echo '<script>alert("Fail to delete Record. Please try again.");window.location="select.php";</script>';
		}
	/*}*/
?>