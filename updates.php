

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
	<div class="col-lg-6 m-auto">
		<form method="post">
			<?php

				include 'conn.php';
				$ids = $_GET['id'];
				$showquery = " SELECT * FROM `crudtable` WHERE id=${ids} ";
				$showdata = mysqli_query($con,$showquery);
				$arrdata = mysqli_fetch_array($showdata);


				if(isset($_POST['done'])){
					$idupdate = $_GET['id'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					// $updatequery = "update crudtable set id=$id, username='$username', password='$password' where id=$idupdate  ";

					$updatequery = " UPDATE `crudtable` SET `id`=id,`username`='$username',`password`='$password' WHERE id=$idupdate ";
					
					$query=mysqli_query($con, $updatequery);
					header('location:display.php');
				}


			?>

			<br><div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center" style="font-size: 1.5vw;">Change workout details</h1>
				</div>
				<br><label  style="font-size: 1.5vw;">Workout Name</label>
				<input type="text" name="username"  value="<?php echo $arrdata['username'];?>" class="form-control" style="font-size: 1.5vw;" ><br>
				<label style="font-size: 1.5vw;">Amount & Set</label>
				<input type="text" name="password" value="<?php echo $arrdata['password'];?>" class="form-control" style="font-size: 1.5vw;" ><br>
				<button class="btn btn-success" type="submit"class="form-control" name="done"  style="font-size: 1.5vw;">Update</button>
				
			</div>
			
		</form>
	</div>

</body>
</html>