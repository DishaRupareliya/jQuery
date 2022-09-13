<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.6.1"></script>
	<title></title>
</head>
<body class="">
	<div class="container p-5">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="alert alert-dark alert-dismissible fade show mt-1" role="alert">
			<h4 id="response"></h4>
			<button type="button" class="btn-close" aria-label="Close" id="alert_close"></button>
		</div>
		<h2 class="text-center">Form</h2>
			<div class="border p-3 bg-light">
				<div class="row">
					<div class="col-12 mb-3">
						<label class="form-group mb-2">Username or Email Address</label>
						<input type="text" name="name" id="input1" class="form-control input-block js-login-field" autofocus="autofocus" autocapitalize="off" autocorrect="off" autocomplete="off">
					</div>
				</div>
				<div class="position-relative">
						<label class="form-group mb-2">Password</label>
						<input type="password" name="password" id="input2" class="form-control input-block js-passwprd-field">
					<!-- <a href="forgotpassword" class="label-link position-absolute top-0 right-0" tabindex="0">Forgot password?</a> -->
				</div>
			</div>
			<div class="col-4"></div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$("input").keypress(function(event){
				$(this).css('background-color','#e6ffe6');
			});
			$("input").keyup(function(event){
				$(this).css('background-color','white');
			});
			$("input").keydown(function(event){
				$(this).css('background-color','#e6ffe6');
			});
		});
	</script>
</body>
</html>