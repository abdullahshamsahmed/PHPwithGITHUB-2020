<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
}
</style>
	<table align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>ADDRESS</th>
			<th>GENDER</th>
			<th>CITY</th>
			<th>COLOR</th>
			<th>DOB</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>PROFILE PICTURE</th>
			<th>ACTION</th>
		</tr>
		<?php include_once("controller/all list controller.php");?>
			
			<?php
			include_once __DIR__."/model/dbcon.php";
			$sql = "SELECT * FROM registration LIMIT ".$this_page_first_result.",".$results_per_page."";
			$result = mysqli_query ($conn,$sql);
				if (mysqli_num_rows ($result)>0)
				{
					while ($row = mysqli_fetch_assoc($result))
					{?>
		<tr>
			<?php
						$id=$row['id'];
						$name = $row['name'];
						$address = $row['address'];
						$city = $row['city'];
						$gender = $row['gender'];
						$color = $row['color'];
						$DOB = $row['DOB'];
						$email = $row['email'];
						$ppic = $row['ppic'];
						$password = $row['password'];
			?>
						<td><?php echo $id;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $address;?></td>
						<td><?php echo $gender;?></td>
						<td><?php echo $city;?></td>
						<td><?php echo $color;?></td>
						<td><?php echo $DOB;?></td>
						<td><?php echo $password;?></td>
						<td><?php echo $email;?></td>
						<td><img src="images/<?php echo $ppic;?>" alt="image not found" height="50" width="50"/></td>
						<td>
							<a href="editInfo.php?name=<?php echo $name;?>">EDIT|</a>
							<a href="controller/deleteController.php?id=<?php echo $id;?>">DELETE</a>
						</td>
						
			<?php		
					}
				}
			?>
		</tr>
	</table>
	<div align="center">
		<?php
			for ($page=1;$page<=$number_of_pages;$page++)
			{
				echo '<a href="all list.php?page='. $page .'">'. $page .'</a>';
				echo "     ";
			}
		?>
	</div>
	
</body>
</html>