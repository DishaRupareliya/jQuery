<?php 
	require_once('connection.php');
	include('update.php');

	if(isset($_POST['submit'])){
		unset($_POST['submit']);
		$table='city';
		$DB->insert($table,$_POST);
		$_POST=array();
		header('location:select_city_data.php');
	}
	
	echo "<pre>";
	print_r ($myrecords);
	echo "</pre>";
	if(isset($_POST['update'])){
		unset($_POST['update']);
		$table='city';
		$where['id']=$_POST['hid'];
		if(isset($_POST['hid'])){
			unset($_POST['hid']);
		}
		$abc=$DB->update($table,$_POST,$where);
		header('location:select_city_data.php');
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
				<h2 class="text-center">City</h2>
				<div class="border rounded-2 bg-light mb-3">
					<div class="container p-5">
						<form action="#" method="POST">
							<div class="row mb-3">
								<div class="col-md-12 col-6">
									<label for="city" class="form-label">city</label>
									<input type="text" name="city" id="city" class="form-control" autocomplete="off" required value="">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-md-6">
									<?php if(isset($_POST['id'])){ ?>
										<input type="hidden" name="hid" value="">
										<input type="submit" name="update" value="update" id="update" class="btn btn-outline-primary" >
									<?php }else{ ?>
										<input type="submit" name="submit" value="submit" id="submit" class="btn btn-outline-primary" >
									<?php } ?>
								</div>
							</div>
						</form>
					</div>
				</div>
				<button class="btn border rounded-2 bg-dark text-light" id="btn1">back</button>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#btn1').click(function(){
				window.location.replace("select_city_data.php");
			});
		});
		window.onload=function(){
			history.replaceState("","","citydata_insert.php");
		}
	</script>
</body>
</html>