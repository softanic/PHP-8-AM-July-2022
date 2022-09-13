<html>
	<head>
	
	</head>
	<body>
		<form method="POST" action="form-save.php">
			<label>name</label>
			<input type="text" name="name"><br>
			<label>Mobile no</label>
			<input type="text" name="mobile"><br>
			<label>email</label>
			<input type="email" name="email"><br>
			<label>Gender</label>
			<input type="radio" name="gender" value='male' >Male
			<input type="radio" name="gender" value='female'>Female
			
			<br>
			<label>Lang known</label>
			<input type='checkbox' name='lang[]' value='marathi'>Marathi
			<input type='checkbox' name='lang[]' value='eng'>english
			<input type='checkbox' name='lang[]' value='hindi'>hindi
			
			<br>`
			
			
			<input type="submit">
			
		</form>
		
	</body>
</html>