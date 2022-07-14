<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup students</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<section>
    <div class="row rounded m-5 pt-4 pb-2 bg-dark">
        <div class="col">
            <h1>SignUp Here</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <form class="form" method="post" action="signupre.php">
                <label >User Name</label>
                <input class="form-control mb-4 p-4" name="u_name" required placeholder="Full Names"  type="text">
                <label >Email</label>
                <input class="form-control mb-4 p-4" name="u_email" required placeholder="Email" type="text">
                <label >Password</label>
                <input class="form-control mb-4 p-4" name="u_password" required placeholder="Password"  type="password">
                <label >Adimssion</label>
                <input class="form-control mb-4 p-4" name="u_admission" required placeholder="Admission"  type="text">
                <input  value="Register" name="btn_register" class=" btn btn-info mt-3" type="submit">
            </form>
        </div>


    </div>
</section>
</body>
</html>
