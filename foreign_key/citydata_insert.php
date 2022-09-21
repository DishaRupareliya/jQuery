<?php 
	require_once('connection.php');
	$table='city';
	if(isset($_POST['submit'])){
		unset($_POST['submit']);
		$DB->insert($table,$_POST);
		$_POST=array();
		header('location:navbar.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-3.6.1.js"></script>
	<title></title>
</head>
<body><?php require_once('navbar.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6 p-5">
				<h2 class="text-center">Form</h2>
				<div class="border rounded-4 bg-light">
					<div class="container p-5">
						<form action="#" method="POST">
							<div class="row mb-3">
								<div class="col-md-12 col-6">
									<label for="city" class="form-label">city</label>
									<input type="text" name="city" id="city" class="form-control" autocomplete="off" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-md-6">
									<input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		window.onload=function(){
			history.replaceState("","","citydata_insert.php");
		}
	</script>
</body>
</html>