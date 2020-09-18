<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
</head>
<body>
	<fieldset>
		<legend align="center"><h1>-:Login:-</h1></legend>
			<form action="controller/loginControl.php" method="POST" enctype="multipart/form-data">
				<div>
					<label for="name">NAME:</label><br />
					<input type="text" name="name"/><br />
					<label for="pass">Password:</label><br />
					<input type="password" name="pass" id="myInput"/><br />
					<input type="checkbox" onclick="myFuction()">Show Password...
					<a href="#">Forgotten password>>></a>
					<a href="registration.php">Registration>>></a>
					
					<br />
					<input type="submit" name="submit" value="Login"/>
				</div>
				
			</form>
	</fieldset>
</body>
</html>
<?php
	if(isset($_GET['Message'])){
		echo $_GET['Message'];
	}
?>
<script type="text/javascript">
	function myFuction()
	{
		var x = document.getElementById("myInput");
		if (x.type === "password")
		{
			x.type = "text";
		}
		else
		{
			x.type = "password";
		}
	}
</script>