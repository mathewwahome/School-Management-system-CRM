<?php
session_start();
if (!isset($_SESSION['name'])){
    header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addresults</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<header>

</header>
<section>
    <div class="col-4">
        <h4>Results Addition</h4>
        <form class="form" method="post" action="results_handler.php">
            <input type="text" name="u_addmin" class="form-control" placeholder="Admission">
            <input type="text" name="u_name" class="form-control" placeholder="StudentName">
            <input type="text" name="u_m" class="form-control" placeholder="Math">
            <input type="text" name="u_e" class="form-control" placeholder="English">
            <input type="text" name="u_k" class="form-control" placeholder="Kiswahili">
            <input type="text" name="u_c" class="form-control" placeholder="Chemistry">
            <input type="text" name="u_p" class="form-control" placeholder="Physics">
            <input type="text" name="u_C" class="form-control" placeholder="CRE">
            <input type="text" name="u_b" class="form-control" placeholder="Biology">
            <input type="text" name="u_h" class="form-control" placeholder="History">
            <input type="text" name="u_bs" class="form-control" placeholder="Business">
            <input type="text" name="u_comp" class="form-control" placeholder="Computer">
            <input type="submit" name="resultsadd_btn" class="btn btn-info" value="submit">
        </form>
    </div>
</section>
<footer>

</footer>
</body>
</html>
