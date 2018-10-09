<?php 

	include'connect.php';

	// $text = 'tes';
	$email = $_POST['email'];

	if(isset($_POST['reset'])){
		
		$success = "";
		echo $success;
		header("../pages/forget_password.php");

	}

	class Connect{
		public	$first,
				$last, 
				$address; 

		private $dbServerName, 
				$dbUsername,
				$password,
				$dbName;
				
		public function __construct($dbServerName='localhost', $dbUsername= 'root', $password= '', $dbName= 'rise_enterprise'){
			$this->dbServerName = $dbserverName;
			$this->dbUsername = $dbUsername;
			$this->password = $password;
			$this->dbName = $dbName;
		}

		public function show(){
			
		}
	}

	$objekbaru = new Connect("Nama");

	echo $objekbaru;	

 ?>