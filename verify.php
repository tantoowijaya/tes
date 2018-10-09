<?php

require'connect.php';
session_start();

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
	$username = $conn->escape_string($_GET['email']);
	$hash = $conn->escape_string($_GET['hash']);

	$result = $conn->query("SELECT * FROM admin WHERE username = '$username' AND active='0'");

	if($result->num_rows == 0){
		$_SESSION['message'] = "Your account has been actived!";

		//Set the user status to active =1 
		$conn->query("UPDATE admin SET active='1' WHERE username = '$username'") or die($conn->error);
		$_SESSION['active'] = 1;

		header("Location: success.php");
	}
}else{
	$_SESSION['message'] = "Invalid parameters provided for account verification!";
	header("Location:error.php");
}


?>