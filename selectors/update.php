<?php
//check if the updatebutton has been clicked
if (isset($_GET["u_id"])){
//    receive the data from the url
    $userId = $_GET["u_id"];
    $userName =$_GET["u_name"];
    $userEmail =$_GET["u_mail"];
    $userPassword=$_GET["u_pass"];
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src ="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<!--the start of the form section-->
<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="text-info text-center">Update User</h1>
            <form action="update_handler.php" method="post">
                <input value="<?php echo $userId; ?>" name="u_id" type="hidden">
                <input value="<?php echo $userName; ?>" class="form-control" name="u_name" type="text" placeholder="Enter name ">
                <input value="<?php echo $userEmail; ?>" class="form-control" name="u_email" type="email" placeholder="Enter email">
                <input value="<?php echo $userPassword; ?>" class="form-control" name="u_pass" type="password" placeholder="Enter password">
                <input class="btn btn-outline-info btn-block" name="btn_update" type="submit" value="Update">
                <a class="btn btn-outline-success btn-block" href="users.php">Back</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</section>
<!--the  end of the  form section-->
</body>
</html>
