<?php 
	require_once('connection.php');
	require_once('navbar.php');
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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 mb-3">
			<div id="div1" class="m-5">
				<h3 align="center" class="mb-4">Subject</h3>
				<?php
					$sql="SELECT * FROM subject";
					$styleTable='border: 1px black solid; text-align: center;width:100%;';
					$styleHeader='background-color:#0E0E0F; border:1px black solid;color:white;';
					echo $DB->getHTML($sql,null,'',$styleTable,$styleHeader, '', 'subject');
				?>
			</div>
		</div>
		<div class="col-md-2">
			<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
				<button class="btn border rounded-2 bg-dark text-light" id="btn1">ADD</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#btn1").click(function(event) {
			window.location.replace('subject_data_insert.php');
		});
	});
</script>
</body>
</html>
