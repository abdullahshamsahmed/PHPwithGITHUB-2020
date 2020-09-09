<!DOCTYPE HTMl></br>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>registration page</title>
</head>
<body>
	<fieldset>
		<legend align="center"><h1>-:Registration Form:-</h1></legend>
			<form action="" >
				<label for="name">Name:</label></br>
				<input type="text" name="name"/><br/>
				<label for="address">Address:</label></br>
				<textarea name="add" id="" cols="22" rows="5"></textarea><br/>
				<label for="gender">Gender:</label></br>
				<input type="radio" name="male" value="male"/>MALE
				<input type="radio" name="female" value="female"/>FEMALE<br/>
				<label for="city">City: </label></br>
				<select name="city" id="">
					<option value="DHAKA">DHAKA</option>
					<option value="CHITTAGONG">CHITTAGONG</option>
					<option value="KHULNA">KHULNA</option>
					<option value="RAJSHAHI">RAJSHAHI</option>
					<option value="BORISAL">BORISAL</option>
					<option value="SYLHET">SYLHET</option>
				</select><br/>
				<label for="DOB">DOB:</label></br>
				<input type="date" name="DOB" /><br/>
				<label for="pass">Password:</label></br>
				<input type="password" name="pass"/><br/>
				<label for="email">Email:</label></br>
				<input type="email" name="email" /></br>
				<label for="ppic">Profile Photo: </label></br>
				<input type="file" name="image"/><br/><br/>
				
				<input type="submit" value="submit" name="submit"/>
			</form>
	</fieldset>
</body>
</html></br>