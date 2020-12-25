

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <?php include 'link.php' ?>
	 <style>
	 	.fa{
			font-size: 18px;
		}
		.fa-edit{
			color: #63c76a;
		}
		.fa-trash{
			color: #ff0000;
		}
	 </style>
</head>
<body>

	<div class="container">
	<div class="col-lg-12">
		<br><br>
		<h1 class="text-warning text-center" style="font-size: 2.5vw;">My Workouts</h1>
		<table class="table table-striped table-hover table-bordered">

			<tr class="bg-dark text-white text-center">
				
				<th  style="font-size: 2vw;">Workout</th>
				<th style="font-size: 2vw;">Amount * Set</th>
				<th style="font-size: 2vw;">Update</th>
				<th style="font-size: 2vw;">Delete</th>
			</tr>

			<?php

				include 'conn.php';

				
				$q = " select * from crudtable ";
				$query=mysqli_query($con, $q);
				while ($res= mysqli_fetch_array($query)) {
					
			?>

			<tr class="text-center">
				
				<td style="font-size: 2vw;"><?php echo $res['username'];?></td>
				<td style="font-size: 2vw;"><?php echo $res['password'];?></td>

				<!-- <td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">DELETE</a></button></td>
				<td><button class="btn-primary btn"> <a href="updates.php?id=<?php echo $res['id'];?>" class="text-white">UPDATE</a> </button></td> -->

				<td ><a href="updates.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="update"><i class="fa fa-edit" aria-hidden="true"  style="font-size: 2vw;"></i></a></td>
				<td><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="delete"><i class="fa fa-trash" aria-hidden="true"  style="font-size: 2vw;"></i></a></td>	
			</tr>
			<?php
		}

			?>


		</table>
		<a href="index.php"><button class="btn btn-warning"  style="font-size: 2vw;">Add More</button></a>
		

	</div>
	</div>
	<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();
	});
	</script>




</body>
</html>