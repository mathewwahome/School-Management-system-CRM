<?php
//check if the update button has been clicked
if(isset($_GET["u_id"])){
    //receive data from the url
    $userId=$_GET["u_id"];
    $userName=$_GET["u_name"];
    $userEmail=$_GET["u_mail"];
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
    <title>UPDATE</title>

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
            <h1 class="text-info text-center">Update User</h1> <br><br>
            <form method="post" action="">
                <input name="u_id" type="hidden">
                <input value=" <?php echo $userName?>"  class="form-control" name="u_name" Placeholder="Enter your name" type="text"> <br><br>
                <input value=" <?php echo $userEmail?>" class="form-control" name="u_email" placeholder="Enter your Email" type="email"> <br><br>
                <input value=" <?php echo $userPassword?>" class="form-control" name="u_pass" placeholder="Enter Your Password" type="password"> <br><br>
                <input class="btn btn-outline-info btn-block " name="btn_update" value="Update" type="submit"> <br><br>

                <a class="btn btn-success btn-block" href="users.php">Back</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</section>
<!--form ends here-->

</body>
</html>
