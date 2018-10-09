<?php 
	
	$studentError ="";
	$genderError = "";

	if(isset($_POST['submit'])){
		include_once 'connect.php';
		// escape_string for SQL Injeqtion
		//This variabel to get the data from the form
		$student = $conn->escape_string($_POST['student_name']);
		$gender = $conn->escape_string($_POST['gender']);
		$dob = $conn->escape_string($_POST['date']);
		$class_name = $conn->escape_string($_POST['class_name']);
		$parent_name =$conn->escape_string($_POST['parent_name']); 
		$parent_email =$conn->escape_string($_POST['parent_email']); 
		$status =$conn->escape_string( $_POST['status']);
		$bep =$conn->escape_string($_POST['checkbox']);
		$source =$conn->escape_string($_POST['source']);
		$approach =$conn->escape_string($_POST['approach']);

		if(empty($student) ||  empty($gender)  ||  empty($dob) || empty($class_name) || empty($parent_name) || empty($parent_email) || empty($status) || empty($bep) || empty($source) || empty($approach)){
			header("Location:../pages/leads_regis_pages.php?field=empty");

		}else{	
			$sql ="INSERT INTO `leads_db` (`id`, `student_name`, `gender`, `dob`, `class_name`, `parent_name`, `parent_email`, `status`, `bep`, `source`, `approach`,`date`) VALUES (NULL, '$student', '$gender', '$dob', '$class_name', '$parent_name', '$parent_email', '$status', '$bep', '$source', '$approach', NOW());";
			$result = mysqli_query($conn,$sql);
			header("Location:../pages/leads_regis_pages.php?field=success");
		}
	}else{
		echo "Error";
	}
	
 ?>