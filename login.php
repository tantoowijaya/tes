<?php 

	if(isset($_POST['login'])){
		include_once 'connect.php';
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)) {
			echo "<script>alert('Username / Password Is Empty')</script>";
		}
		else {
			$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
			
			if (mysqli_num_rows($result) === 1) {

				$row = mysqli_fetch_assoc($result);

					if(password_verify($password,$row["psw"])){
						$_SESSION['login'] = true;
						$_SESSION['username'] = $username;
						header("Location:pages/home.php");
						exit;
					}
				
			}else {
				$error = 'Username / Password Salah !';
				$_SESSION['message'] = $error;
				exit();
			}
		}
		
	}else {
		header("Location:../index.php?=Error");
	}

?>

