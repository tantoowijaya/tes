<?php
	
	// Error Handling
	$firstError ="";
	$lastError ="";
	$genderError="";
	$usernameError ="";
	$pswError ="";
	$cpassError="";
	$cpassSame ="";
	$emailError="";
	$genderError ="";

	// Account Registration
	if(isset($_POST['regis'])){

	include_once'connect.php';

	// protect againts SQL injections.
	$first =$conn->escape_string($_POST['first']); 
	$last = $conn->escape_string($_POST['last']);
	$gender = $conn->escape_string($_POST['gender']);
	$username = $conn->escape_string($_POST['username']);
	$password = $conn->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
	$hash = $conn->escape_string(md5(rand(0,1000)));
	$cpass = $conn->escape_string($_POST['cpass']); // For Check Current Password And Confirm Password Is The same
	$email = $conn->escape_string($_POST['email']); 
	$phone = $conn->escape_string($_POST['phone']);
	$dob = $conn->escape_string($_POST['dob']);
	$position = $conn->escape_string($_POST['position']);

		if(empty($last)){
			$firstError = 'First Name Kosong';

		}else{
			$sql = "INSERT INTO admin (first, last, username, psw, hash, email, phone, gender, dob, position,date_created) 
					VALUES ('$first','$last','$username','$password','$hash','$email','$phone','$gender','$dob','$position',NOW())";
			$result = mysqli_query($conn, $sql);
			header("Location:../pages/acc_regis_pages.php?field=success");
			
		}

	}else{
		echo "Something Gone Wrong";
	}


 ?>
