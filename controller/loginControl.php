<?php
	//dbconnection file include 
	include('../model/dbcon.php');
	if (isset ($_POST['submit']))
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		
		$sql = "SELECT * FROM registration WHERE name='".$name."' AND password='".$pass."' limit 1";
		
		$result = mysqli_query($conn,$sql);
		
		if (mysqli_num_rows($result)==1)//mysqli_num_rows() aita check kore j ai result ar konta row ase database a 
		{
			header("Location:../curd.php");
		}
		else
		{
			$Message = urlencode("Wrong: Name or Password!!! Try again.");
			header("Location:../index.php?Message=".$Message);
			die;
		}
		
	}
?>