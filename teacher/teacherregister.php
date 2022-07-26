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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

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
