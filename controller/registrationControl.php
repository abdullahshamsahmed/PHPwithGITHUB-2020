<?php
	//dbconnection file include 
	include('../model/dbcon.php');
	//condition apply
	if (isset($_POST['submit'])){
		$file = $_FILES ['image'];
		echo "<pre>";
		print_r($file);
		echo "</pre>";
	}
?>
