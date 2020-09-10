<?php
	//dbconnection file include 
	include('../model/dbcon.php');
	//condition apply
	if (isset($_POST['submit'])){
		
		$name=$_POST['name'];
		$add=$_POST['add'];
		$gender=$_POST['gender'];
		$city=$_POST['city'];
		$DOB=$_POST['DOB'];
		$pass=$_POST['pass'];
		$email=$_POST['email'];
		
		// <image file controller> 
		$file = $_FILES ['image'];
		$fileName = $file['name'];
		$fileTmp = $file['tmp_name'];
		
		// echo "<pre>";//[starting] make print_r function line by line
		
		// print_r($files);// keywords details print out function
		
		// echo "</pre>";//[/ending/] make print_r function line by line
		
		$fileExt = explode ('.',$fileName);//extention find expolded by "."
		$fileCheck = strtolower(end($fileExt)); //start to lower : extention name small letter convert
		
		$fileExtStore = array ('jpg','png','jpeg');
		
		$destinationFile; // public-global variable 
		
		if (in_array ($fileCheck,$fileExtStore))
		{
			$destinationFile = "../images/".$fileName;
			
			move_uploaded_file($fileTmp,$destinationFile);//tmp file to target file store statements	
		}
		// </image file controller> 
		
		$sql="INSERT INTO registration (name,address,gender,city,DOB,password,email,ppic) VALUES ('$name','$add','$gender','$city','$DOB','$pass','$email','$$destinationFile')";
	
		if (!mysqli_query($conn,$sql))
		{
			echo"Not inserted";
		}
		else
		{
			echo "Inserted!!!";
			header("refresh:2; url=../registration.php");
		}
			
		}
?>