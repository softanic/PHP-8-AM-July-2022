<html>
	<body>
		<form action='insert.php' method='post' enctype="multipart/form-data"> 
			<table border=0>
				<tr>
					<th>Name</th>
					<td><input type='text' name='name'></td>
					
				</tr>
				<tr>
					<th>Mobile</th>
					<td><input type='text' name='mobile'></td>
					
				</tr>
				<tr>
					<th>email</th>
					<td><input type='text' name='email'></td>
					
				</tr>
				<tr>
					<th>gender</th>
					<td>
						<select name='gender'>
							<option>Male</option>
							<option>Female</option>
							<option>Trans</option>
						</select>
					</td>
					
				</tr>
				<tr>
					<th>password</th>
					<td><input type='text' name='password'></td>
					
				</tr>
				<tr>
					<th>Photo</th>
					<td><input type="file" name="photo"></td>
				</tr>
				<tr>
					<th></th>
					<td><input type='submit'></td>
					
				</tr>
			</table>
		</form>
	</body>
</html>