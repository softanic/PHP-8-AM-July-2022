<html>
	<body>
		<?php
			$user_id=$_REQUEST['user_id'];
			$conn=mysqli_connect("localhost","root","","php_bca");
			$q="select * from users where user_id= $user_id";
			$res=mysqli_query($conn,$q);
			$user=mysqli_fetch_array($res);
			print_r($user['name']);
			
		?>
		<form action='update.php' method='get'>
			<table border=0>
				<tr>
					<th>Name</th>
					<td><input type='text' name='name' value="<?php echo $user['name']; ?>"></td>
					
				</tr>
				<tr>
					<th>Mobile</th>
					<td><input type='text' name='mobile'  value="<?php echo $user['mobile_no']; ?>"></td>
					
				</tr>
				<tr>
					<th>email</th>
					<td><input type='text' name='email'  value="<?php echo $user['email_id']; ?>"></td>
					
				</tr>
				<tr>
					<th>gender</th>
					<td>
						<select name='gender'>
							<option <?php echo $user['gender']=='male'? 'selected' :  '' ; ?>>Male</option>
							<option  <?php echo $user['gender']=='female'? 'selected' :  '' ; ?>>Female</option>
							<option <?php echo $user['gender']=='trans'? 'selected' :  '' ; ?>>Trans</option>
						</select>
					</td>
					
				</tr>
				
				<tr>
					<th></th>
					<td><input type='submit'></td>
					
				</tr>
			</table>
		</form>
	</body>
</html>