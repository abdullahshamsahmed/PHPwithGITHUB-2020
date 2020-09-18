<?php
	include_once __DIR__.'/../model/dbcon.php';
	$sql = "DELETE FROM registration where id = ".$_GET['id']."";
	mysqli_query($conn,$sql);
	echo"done";
    header("refresh:1; url=../all list.php");
	
?>