<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teachers registration</title>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<header>

</header>
<section>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h1>Teachers registration</h1>
            <form action="registertr.php" method="post" class="form">
                <?php if (isset($_GET['sorry'])) { ?>
                <p class="error" style="color: red"><?php echo $_GET['sorry']; ?></p>
                <?php } ?>
                <label >Tr Name</label>
                <input type="text" name="name" required placeholder="Tr Name" class="form-control">
                <label >Subject you teach</label>
                <input type="text" name="sub" placeholder="Subject" required class="form-control">
                <label >Class Teacher</label>
                <input type="text" name="form" placeholder="Classteacher Form" class="form-control">
                <label >Department</label>
                <input type="text" name="department" required placeholder="Department" class="form-control">
                <label >Password</label>
                <input type="password" placeholder="Password" required class="form-control " name="password">
                <label >Pin:<p style="color: green;">The pin given by the HOD</p></label>
                <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <input type="password" placeholder="Pin" required class="form-control mb-4" name="pin">
                <input type="submit" name="btn_reg" value="Register" class="btn btn-info">
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</section>
</body>
</html>
