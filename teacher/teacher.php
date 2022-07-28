<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/teacher.css">
</head>
<!--The class teacher has the following abilities
1.Add student to the class list.
2.Update the student register.
3.View the class merit or any other class.
4.View school activities.
-->

<body>
    <!--students of a sertain class as recorded by the class teacher-->
    <header>
        <!--    navbar-->
        <!--    bootstrap header-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-size: 30px">
                    <font style="color: deeppink;font-family: 'Poppins', 'Montserrat', sans-serif">X-</font>School
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="collapsibleNavbar">
                    <ul class="navbar-nav navnavfloat">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="teacherregister.php">Signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="login_main_section " style="margin-top: 80px">

            <div class="login_mini_main_section">
                <h1>Login Here</h1>
                <form action="teacherlogin.php" method="post">
                    <?php if (isset($_GET['oky'])) { ?>
                        <p class="error" style="color: green"><?php echo $_GET['oky']; ?></p>
                    <?php } ?>
                    <label>User Name</label>
                    <input type="text" name="t_name" placeholder="Username full" class="p-2 mb-4 form-control">
                    <label>Password</label>
                    <input type="password" name="t_pass" placeholder="password" class="p-2 mb-4 form-control">
                    <label>Pin</label>
                    <input type="password" placeholder="Pin" class="form-control p-2 mb-4" name="pin">
                    <label>Department</label>
                    <input type="text" name="department" placeholder="Department" class="p-2 mb-4 form-control">
                    <input type="submit" name="login_btn" value="Login" class="btn_login btn btn-info mt-3">
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </section>
</body>

</html>