<?php
// Mystic Viper

include 'conn.php';
if(isset($_POST['done'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$q = "INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username','$password')";
	$query=mysqli_query($con, $q);
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<p text align="center" style="color:white;background-color: red;font-weight: bold;">Workout</p>
	<div class="container">
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Workout Name" autocomplete="off" required>
			</div>

			<div class="form-group">
				<input type="text" name="password" class="form-control" placeholder="amount & set" autocomplete="off" required>
			</div>

			<button type="sumbit" class="btn btn-success" name="done">add</button><br><br>
			<!-- /<button class="btn btn-success" type="submit"class="form-control" name="done">submit</button><br><br> -->
			<a href="display.php" class="btn btn-info" role="button">view workouts</a>
		</form>
	</div>
</body>
</html>

