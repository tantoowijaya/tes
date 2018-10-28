<?php 

	include'connect.php';
	
	//get the id value that want to delete.
	$myid = $_GET['del_id'];
	if($myid == true ){
		$sql = "DELETE FROM admin WHERE id = $myid";
		$result = mysqli_query($conn, $sql);

		if($result == true){
			echo "<script>alert('sukses')</script>";
			header("Location:../pages/acc_pages.php");
		}else{
			echo "<script>alert('Error')</script>";
		}
	}

	
	// $coba = $_GET['del_id'];
	// echo $coba;

	// $sql = "DELETE FROM 'admin' WHERE id = '".$_GET['del_id']."'";
	// $result = mysqli_query($conn, $sql);
	// header("Location:../pages/acc_pages.php");


 ?>

