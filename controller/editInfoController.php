<?php
	include_once __DIR__.'/../model/dbcon.php';
	
	$sql = "SELECT * FROM registration WHERE name = '".$_GET['name']."'";
	$id='';
	$result = mysqli_query ($conn,$sql);
	$name = '';
	$address='';
	$city='';
	$gender='';
	$color='';
	$DOB='';
	$email='';
	$ppic='';
	$password='';
	
	if (mysqli_num_rows ($result)>0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
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
		}
	}
	
	
	if (isset($_POST['submit']))
	{
		
		$name=$_POST['name'];
		$add=$_POST['address'];
		$gender=$_POST['gender'];
		$city=$_POST['city'];
		
		//<checkbox>
		$colorcheck = $_POST['color'];
		$newCheckVal = implode (",",$colorcheck);// multiple value k separate kora hoise "," koma dia 
		//</checkbox>
		
		$DOB=$_POST['DOB'];
		$pass=$_POST['password'];
		$email=$_POST['email'];
		$upImage = $ppic;
		
		if (isset($_FILES['newImage']))
		{
			
			$file = $_FILES ['newImage'];
			$fileName = $file['name'];
			$fileTmp = $file['tmp_name'];
			
			echo "<pre>";//[starting] make print_r function line by line
				
				print_r($file);// keywords details print out function
				
			echo "</pre>";//[/ending/] make print_r function line by line
			$destination="../images/".$fileName;
			unlink("../images/".$upImage);
			move_uploaded_file($fileTmp,$destination);	
			$upImage = $fileName;
	    }
		$sql="UPDATE `registration` SET `name`='".$name."',`address`='".$add."',`gender`='".$gender."',`city`='".$city."',
		`color`='".$newCheckVal."',`DOB`='".$DOB."',`password`='".$pass."',`email`='".$email."',`ppic`= '".$upImage."' WHERE id='".$id."' ";
		if (!mysqli_query($conn,$sql))
		{
			echo"Not inserted";
		}
		else
		{
			echo "Inserted!!!";
			header("refresh:1; url=../all list.php");
		}
	}
	
	
?>
