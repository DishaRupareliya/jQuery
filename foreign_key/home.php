<?php 
	require_once("connection.php");
	if(isset($_POST['submit'])){
		unset($_POST['submit']);
		$table='student_detail';
		$data=$DB->insert($table,$_POST);
		$_POST=array();
		header('location:navbar.php');
	}
	$sql="SELECT * FROM city";
	$data=$DB->query($sql);
	$DB->execute($sql);
	$result=$DB->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-3.6.1.js"></script>
	<style type="text/css">
		.intro{
			width: 900px;
			height:600px;
			background-color:#F3F6FA;
		}
		.intro2{
			width: 1000px;
			height:600px;
			background-color: lightslategray;
		}
	</style>
	<title></title>
</head>
<body>
	<div class="h6 bg-light text-danger" id="div6">First you perfom every steps and than create your registration</div>
	<nav class="navbar navbar-expand-lg bg-light border">
		<div class="container-fluid">
			<a href="#" class="navbar-brand" id="link1">Step 1</a>
			<div class="collapse navbar-collapse">
				<div class="navbar-nav">
					<a href="#" class="nav-link navbar-brand" id="link2">Step 2</a>
					<a href="#" class="nav-link navbar-brand" id="link3">Step 3</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="container-fluid p-5" id="div1">
		<div id="div2" class="row"></div>
		<div id="div3" class="row">
			<div class=" container">
				<form action="home.php" method="POST">
					<div class="col-12 col-md-6 mb-3">
						<label class="form-label">name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>
					<div class="col-12 col-md-6 mb-3">
						<label class="form-label">email</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>
					<div class="col-12 col-md-6 mb-3">
						<label class="form-label">city</label>
						<select class="form-control" name="city">
							<?php foreach ($result as $results): ?>
								<option value="<?= $results->cid ?>"><?php echo $results->city; ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-12 col-md-6">
						<input type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">
						<input type="reset" name="reset" id="reset" value="reset" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#div6').show();
			$("#div2").hide();
			$('#div3').hide();
			$('.alert').hide();
			$('#link1').click(function(){
				$('#div1').addClass('intro');
				$('#link2').click(function(){
					$('#div2').show();
					$('#div2').html('<h1>Register</h1>');
					$('#link3').click(function(){
						$('#div3').show();
						$('#div6').hide();
					});
				});
			});
		});
	</script>
</body>
</html>