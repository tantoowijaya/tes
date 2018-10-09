<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="">
 		<h1></h1>
 		<p>
 			<?php 
	 	 if (isset($_SESSION['message']) AND !empty($_SESSION['message'])) :
	 	 	echo $_SESSION['message'];
	 	else:
	 		header("Location:../index.php");
	 	endif;
	 	 }
 	  ?>

 		</p>
 	 


 	</form>
 	

 </body>
 </html>