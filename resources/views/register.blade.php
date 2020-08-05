<html>
<head>
	<title>Register</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>
	<form action="/welcome" method="POST">
		@csrf
		<p>First Name:</p>
			<input type="text" name="namadepan">
		<p>Last Name:</p>
			<input type="text" name="namabelakang">
		<p>Gender:</p>
			<input type="radio" name="gender">Male
			<input type="radio" name="gender">Female
			<input type="radio" name="gender">Other
		<p>Nationality:</p>
			<select name="negara">
				<option value="Indonesian">Indonesian</option>
				<option value="Turki">Turki</option>
				<option value="Arab">Arab</option>
			</select>
		<p>Language Spoken:</p>
			<input type="checkbox" name="bahasa"> Bahasa Indonesia<br>
			<input type="checkbox" name="bahasa"> English<br>
			<input type="checkbox" name="bahasa"> Other<br>
		<p>Bio:</p>
			<textarea cols="30" name="bio" rows="10"> </textarea></br>
		<br>	
		<input type="submit" value="Sign Up"> 
	</form>
</body>
</html>