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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
</head>
<body>
<header>
   <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">WG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                        aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="signup.php">Signup</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Send Message</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
</header>
<section>
    <div class="body_head">
        <h1>heloo</h1>
    </div>
</section>
<section>
    <div class="next_section">
        <h1>heloo</h1>
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
