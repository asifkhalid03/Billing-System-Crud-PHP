<?php

	session_start();
	if(isset($_SESSION['ok']))
	{
		
	}
	else
	{
		header('location:login\index.php');
	}


?>