<html>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	<body>
		<form action='update-save.php' method='get'>
		<?php
		include 'db.php';
		$user_id=$_REQUEST['user_id'];
		$q="select * from users where user_id=$user_id";
		$res=mysqli_query($conn,$q);
		$user_data=mysqli_fetch_array($res);
		//print_r($user_data);
		?>
			<table border=0>
				<tr>
					
					<td><input type='hidden'  name='user_id' value='<?php echo $user_data['user_id']; ?>'></td>
					
				</tr>
				<tr>
					<th>Name</th>
					<td><input type='text' name='name' value='<?php echo $user_data['name']; ?>'></td>
					
				</tr>
				<tr>
					<th>Mobile</th>
					<td><input type='text' name='mobile'  value='<?php echo $user_data['mobile_no']; ?>'></td>
					
				</tr>
				<tr>
					<th>email</th>
					<td><input type='text' name='email'  value='<?php echo $user_data['email_id']; ?>'></td>
					
				</tr>
				<tr>
					<th>gender</th>
					<td>
					
						<select name='gender' id='gender'>
						
							<option <?php echo $user_data['gender']=='Male'?"selected":""; ?>>Male</option>
							<option <?php echo $user_data['gender']=='female'?"selected":""; ?>>Female</option>
							<option <?php echo $user_data['gender']=='Trans'?"selected":""; ?>>Trans</option>
						</select>
						
						
					</td>
					
				</tr>
				<tr>
					<th></th>
					<td><input type='submit'></td>
					
				</tr>
			</table>
			<script>
			
				$('#gender').val(<?php echo $user_data['gender']; ?>);
				
			</script>
		</form>
	</body>
</html>
&nbsp;