<?php
	include_once("controller/add sessionControl.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<fieldset>
		<legend align="center"><?php echo $_GET['name'] ?> Details</legend>
		<?php 
			include ('model/dbcon.php');
			$WhomDetails = $_GET['name'];
			$sql = "SELECT * FROM registration WHERE name = '".$WhomDetails."'";
			$id;
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result)>0)
			{
				while ($row = mysqli_fetch_assoc($result))
				{?>
					
					<img src="images/<?php echo $row['ppic'];?>" alt="" height="180" width="150"/><br />
					<label for="name">Name: </label>
					<?php echo $row['name']?><br/>
					<label for="address">Address: </label>
					<?php echo $row['address']?><br/>
					<label for="city">City: </label>
					<?php echo $row['city']?><br/>
					<label for="gender">Gender: </label>
					<?php echo $row['gender']?><br/>
					<label for="color">Color: </label>
					<?php echo $row['color']?><br/>
					<label for="pass">Password: </label>
					<?php echo $row['password']?><br/>
					<label for="email">Email: </label>
					<?php echo $row['email']?><br/>
				<?php
				}
			}
		?>
		<?php
			echo"<a href='editInfo.php?name=". $WhomDetails ."'>Edit</a>";
		?>
		<a style="text-decoration:none" href="logout.php"><<< logout...</a>
	</fieldset>
</body>
</html>
