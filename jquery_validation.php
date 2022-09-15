<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.6.1"></script>
   	<title></title>
</head>
<body class="">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 p-4">
				<div class="alert alert-dark alert-dismissible fade show mt-1" role="alert">
					<h4 id="response"></h4>
					<button type="button" class="btn-close" aria-label="Close" id="alert_close"></button>
				</div>
				<h2 class="text-center">Form</h2>
				<div class="border rounded-4 bg-light mb-3">
					<form action="javascript:void(0)" class="p-5">
						<div class="form-floating mb-3 row">
							<input type="email" class="form-control" id="email" placeholder="name@example.com" autocomplete="off" name="email">
							<label for="email">Email address</label>
						</div>
						<div class="form-floating mb-3 row">
							<input type="password" class="form-control" id="password" placeholder="password" autocomplete="off" name="password" min="6">
							<label for="password">Password</label>
						</div>
						<div class="form-floating mb-3 row">
							<button class="btn btn-primary" type="submit" name="submit" id="submit" value="submit">Sign in</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4 p-2 d-md-flex justify-content-md-end">
					<div><a href="jquery_demo/index.php" class="btn btn-outline-primary">Login</a></div>
				</div>
		</div>
	<script>
		$(document).ready(function(){
			$("input").keypress(function(event){
				$(this).css('background-color','lightGray');
			});
			$("input").keyup(function(event){
				$(this).css('background-color','white');
			});
			$("input").keydown(function(event){
				$(this).css('background-color','lightGray');
			});
			$(".alert").hide();
            $("form").submit(function(){
                var formData=$(this).serialize();
                console.log(formData);
                $.ajax({
                	type: 'POST',
                    url: 'jquery_process.php',
                    data: formData,
                    dataType: "JSON",
                }).done(function (res) {
                    $('.alert').show();
                    if(res.success == true) {
                        $('#response').text('success');
               		}
                    if(res.success == false){
                        $('#response').text('error');
                   	}
                });
            });
            $('#alert_close').on('click', function(event) {
                event.preventDefault();
                $(".alert").hide();
            });			
		});
	</script>
</body>
</html>