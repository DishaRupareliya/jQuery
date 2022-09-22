<?php 
	require_once('connection.php');
	if(isset($_POST['submit'])){
		unset($_POST['submit']);
		$table='subject';
		$DB->insert($table,$_POST);
		$_POST=array();
		header('location:select_subject_data.php');
	}
	$sql='SELECT * FROM student_detail';
	$DB->query($sql);
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
	<title></title>
</head>
<body>
	<?php require_once('navbar.php'); ?>
	<div class="container" id="addcity">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6 p-5">
				<h2 class="text-center">Subject</h2>
				<div class="border rounded-2 bg-light mb-3">
					<div class="container p-5">
						<form action="subject_data_insert.php" method="POST">
							<div class="row mb-3">
								<div class="col-md-12 col-6">
									<label for="subject" class="form-label">subject</label>
									<input type="text" name="subject" id="subject" class="form-control" autocomplete="off" required>
								</div>
								<div class="col-6 col-md-12 mb-3">
									<label class="form-label">student</label>
									<select class="form-control" name="student">
										<?php foreach ($result as $results): ?>
											<option value="<?= $results->id; ?>"><?php echo $results->name; ?></option>
										<?php endforeach ?>
									</select>
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
				<button class="btn border rounded-2 bg-dark text-light" id="btn1">back</button>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#btn1').click(function(){
				window.location.replace('select_subject_data.php');
			});
		});
	</script>
</body>
</html>