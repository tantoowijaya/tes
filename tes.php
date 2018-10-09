<?php 
	session_start();
	require'connect.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>

	<script>

	</script>
	<div class="container">
		<div class="alert alert-success" role="alert">
  		<?php echo $_SESSION["sukses"]; ?>
		</div>
		<div class="col-3">
				<form action="tes.php" method="POST">
			<div class="form-group">
				<input type="text" class="form-control form-control-sm" placeholder="Nama" name="nama">
			</div> 
			<div class="form-group">
				<input type="text" class="form-control form-control-sm" placeholder="Kampus" name="kampus">
			</div>

			<div class="form-group">
				<button class="btn btn-sm btn-primary" name="submit">submit</button>
			</div>

		</form>
		</div>
	
	</div>
	<?php 
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$kampus = $_POST['kampus'];

		$sql = "INSERT INTO tes (nama,kampus) VALUES ('$nama','$kampus')";
		$result = mysqli_query($conn,$sql);

		$txt = 'Insert sukses!';
		$_SESSION["sukses"] = $txt;
	}else{
		echo "0";
	}
	 ?>

	 <div class="col">
	 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quo corporis cum nesciunt, corrupti, reiciendis alias recusandae ea tempora itaque?</p>

	 	<table class="table">
	 		<thead>
	 			<tr>
	 				<th>No</th>
	 				<th>Nama</th>
	 				<th>Kampus</th>
	 				<th>Action</th>
	 			</tr>
	 		</thead>

	 		<tbody>
	 			<?php 

	 			$sql = "SELECT * FROM tes";
	 			$result = mysqli_query($conn,$sql);

	 			while($row = mysqli_fetch_array($result)){
	 				echo "<tr>";
	 				echo "<td>".$row['id']."</td>";
	 				echo "<td>".$row['nama']."</td>";
	 				echo "<td>".$row['kampus']."</td>";
	 				echo "<td><a href='tes.php?id=".$id." class='btn btn-sm btn-warning'>Edit</a>
	 							<a class='btn btn-sm btn-danger' name='delete'>Delete</a>";
	 				echo "</tr>";
	 			}


	 			?>
	 		</tbody>
	 	</table>
	 </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>