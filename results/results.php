<!--they are ment for a spesific student-->
<?php
session_start();
if (!isset($_SESSION['name'])){
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spesific student result</title>
    <script src="../assets/bootstrap/css/bootstrap.css"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body>
<div class="row">
    <div class="col">
        <h4 class="text-center">View your own results</h4>
        <form class="form" method="post"  action="myresult.php"> <!--        spesific_std_rslt.php-->
            <input type="text" placeholder="Studentname" name="stdname" class="form-control">
            <input type="text" placeholder="Admission No." name="stdadm" class="form-control">
            <input type="password" placeholder="Password" name="stdpass" class="form-control">
            <input type="submit" class="btn btn-info" value="Search" name="serch_btn">
        </form>
    </div>
</div>
</body>
</html>
