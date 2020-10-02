<?php
//include_once("index.php");
	if(count($_COOKIE) > 0)
	{
		echo $_COOKIE['name'];
	}
	else{
		session_start();
		if (isset($_SESSION['name']))
		{
			session_destroy();
			header("Location:index.php");
		}
		else
		{
			header("Location:index.php");
		}
	}
	

?>