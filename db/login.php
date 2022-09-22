<html>
	<body>
		<form action="login-validate.php" method="post">
			<table border=0 width="100%" height="100%">
				<tr>
					<th>
						<img height=300 src="https://img.freepik.com/free-vector/mobile-login-concept-illustration_114360-135.jpg?w=2000">
					</th>
					<th>
						<table>
							<tr>
								<td>
									<label>Mobile No</label>
								</td>
								<td>
									<input type="number" value='1234567890' required name="mobile_no">
								</td>
							</tr>
							<tr>
								<td>
									<label>Password</label>
								</td>
								<td>
									<input type="password" required name="password">
								</td>
							</tr>
							<tr>
								<td colspan=2>
									<input type="Checkbox" value="remember" name="remember">Remember me.
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td>
									<input type="Submit" value="Login">
								</td>
							</tr>
							<tr>
								<td colspan=2>
								
									<a href="insert-form.php">Don't have account yet? Register Here</a>
								</td>
							</tr>
					
					
						</table>
					</th>
				</tr>
			</table>
		</form>
	</body>
</html>