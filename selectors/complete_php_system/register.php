<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>

    <script src="assets/bootstrap/js/bootstrap.js" ></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

</head>
<body>

<!--form starts here-->
<section>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1 class="text-info text-center">Register Here</h1> <br><br>
        <form method="post" action="register_handler.php">
            <input class="form-control" name="u_name" Placeholder="Enter your name" type="text"> <br><br>
            <input class="form-control" name="u_email" placeholder="Enter your Email" type="email"> <br><br>
            <input class="form-control" name="u_pass" placeholder="Enter Your Password" type="password"> <br><br>
            <input class="btn btn-outline-info btn-block " name="btn_submit" value="register" type="submit"> <br><br>

            <a class="btn btn-success btn-block" href="users.php">View users</a>
        </form>
    </div>
    <div class="col-3"></div>
  </div>
</section>
<!--form ends here-->

</body>
</html>
