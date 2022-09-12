<!DOCTYPE html>
<html>
<head>
    <title>jQuery Form Example</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.6.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-6 col-md-4 bg-dark text-center text-light" id="user_details">
                <h1 class="pt-lg-5">Ajax Form</h1>
                <h6>User Add Details</h6>
            </div>
            <div class="col-6 col-md-8 bg-light">
                <div class="alert alert-dark alert-dismissible fade show mt-1" role="alert">
                    <h4 id="response"></h4>
                    <button type="button" class="btn-close" aria-label="Close" id="alert_close"></button>
                </div>
                <form action="javascript:void(0)" class="p-lg-5">
                    <h1>Form</h1>
                    <div class="form-floating mb-3">
                        <input type="name" class="form-control" id="name" placeholder="name" autocomplete="off" name="name">
                        <label for="name">Enter Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" autocomplete="off" name="email">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="password" autocomplete="off" name="password">
                        <label for="password">Enter Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".alert").hide();
            $("form").submit(function(){
                var formData=$(this).serialize();
                console.log(formData);
                $.ajax({
                    url: 'process.php',
                    type: 'POST',
                    data: formData,
                    dataType: "JSON",
                }).done(function (res) {
                    $('.alert').show();
                    if(res.success == true) {
                        $('#response').text('success');
                    } if(res.success == false) {
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