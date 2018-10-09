<?php 

	$dbServerName = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'rise_enterprise';
	
	$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName) or die($mysqli->error);

 ?>