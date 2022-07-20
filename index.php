<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<header>
    <!--    bootstrap header-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 30px">
            <font style="color: deeppink;font-family: 'Poppins', 'Montserrat', sans-serif">X-</font>School</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav navnavfloat">
                    

                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Signup</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="teacherregister.php">As Teacher</a></li>
                            <li><a class="dropdown-item" href="signup.php">As Student</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Login</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="teacher.php">As Teacher</a></li>
                            <li><a class="dropdown-item" href="login.php">As Student</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section>
    <div class="body_head">

    </div>

</section>
<section>
    <center>
        <h3 class="mt-2">Our Teem</h3>
        <div class="row m-4">
            <div class="card m-2"  style="width: 400px">
                <div class="card-header">
                    <img src="assets/images/element5-digital-OyCl7Y4y0Bk-unsplash.jpg" alt="">
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dicta earum eum explicabo hic iure minus molestiae,
                        ?</p>
                </div>
            </div>
            <div class="card m-2" style="width: 400px">
                <div class="card-header">
                    <img src="assets/images/element5-digital-OyCl7Y4y0Bk-unsplash.jpg" alt="">
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dicta earum eum explicabo hic iure minus molestiae,
                        ?</p>
                </div>
            </div>
            <div class="card m-2" style="width: 400px">
                <div class="card-header">
                    <img src="assets/images/element5-digital-OyCl7Y4y0Bk-unsplash.jpg" alt="">
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dicta earum eum explicabo hic iure minus molestiae,
                        ?</p>
                </div>
            </div>
        </div>
    </center>
</section>
<section>
<!--    slider section-->
</section>
<section>
<!--    abuout us section-->

</section>
<section>
<!--    our services section-->
</section>
<section>
<!--    our team section-->
</section>
<section>
<!--    get a schoolaship section-->
</section>
<section>
<!--    testimonios section from the student and parents-->
</section>
<footer>
<!--    jumbotron section-->
    <div class="mt-4 p-5 rounded index_footer">
<!--        get in touch section-->
        <div>
            <h1>Get In Touch</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="#" method="post">
                    <input type="text"  name="name" class="form-control mb-3 p-2" placeholder="Name">
                    <input type="text" name="email" class="form-control mb-3 p-2" placeholder="Email">
                    <input type="text" name="subject" placeholder="subject" class="form-control mb-3 p-2">
                    <textarea name="message" class="form-control mb-3 p-2"  placeholder="message" ></textarea>
                    <input type="submit" name="user_message" class="btn btn-info p-2" value="SEND MESSAGE">

                </form>
            </div>
            <div class="col">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>

    </div>
</footer>
</body>
</html>
