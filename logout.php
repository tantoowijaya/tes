<?php 
	session_start();
	session_unset();
	session_destroy();
	
	$message= 'You are logged out!';
	$_SESSION['logout'] = $message;
	header("Location:../index.php");
 ?>