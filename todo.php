<?php 

	include 'connect.php';

	if(isset($_POST['submit'])){
		$task = $_POST['task'];
		if(empty($task)){
			$error = "this is field is empty";
			$_SESSION['error'] = $error;
			header("Location:../pages/home.php");
		}else{
			$success = "";
			$user_name = $GET['username'];
			$sql = "INSERT INTO todo (activity, created, user_id) VALUES ('$task',NOW(),'$user_name')";
			$result = mysqli_query($conn, $sql);
			echo $success = "Terima kasih";
			header("Location:../pages/home.php");
		}
	}	

	if(isset($_GET['del'])){
		$id = $_GET['del'];
		$result = mysqli_query($conn, "DELETE FROM todo WHERE id = $id");
		header("Location:../pages/home.php");	
	}
	

 ?>