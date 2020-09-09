<?php
	//dbconnection file include 
	include('../model/dbcon.php');

	$name=$_POST['name'];
	$add=$_POST['add'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	$DOB=$_POST['DOB'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	//$ppic=$_POST['ppic'];

	$sql="INSERT INTO registration (name,address,gender,city,DOB,password,email) VALUES ('$name','$add','$gender','$city','$DOB','$pass','$email')";
	
	if (!mysqli_query($conn,$sql))
	{
		echo"Not inserted";
	}
	else
	{
		echo "Inserted!!!";
		header("refresh:2; url=../registration.php");
	}
	
?>