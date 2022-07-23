
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<section>
    <div class="row rounded m-5 pt-4 pb-2 bg-dark">
        <div class="col">
            <h1>Login Here</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <form action="loginre.php" method="post">
                <label >User Name</label>
                <input type="text" name="name" required placeholder="Username full" class="p-4 mb-4 form-control">
                <label >Password</label>
                <input type="password" name="u_pass" required placeholder="password" class="p-4 mb-4 form-control">
                <label >Admission</label>
                <input type="text" name="u_admission" required placeholder="Admission" class="p-4 mb-4 form-control">
                <input type="submit" name="login_btn" value="Login" class="btn_login btn btn-info mt-3">
            </form>
            <a href="signup.php"><h5>Sign up insted</h5></a>
        </div>
    </div>
</section>
</body>
</html>
