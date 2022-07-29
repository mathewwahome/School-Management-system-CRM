<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/libraly.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- givng of books
    <form action="std_bk_giving.php" method="post">
        <input type="submit"class='btn btn-info mb-3' name='give_book_to_std'>
    </form>
    <form action="std_bk_giving.php" method="post">
        <input type="submit" value="collect"class='btn btn-info' name='get_book_to_std'>
    </form> -->
    <section>
        <div class="mainlib_side_bar">
            <div class="lib_side_bar">
                <div class="img_profile">
                    <img src="assets/images/shubham-dhage-ykFTt5Dq1RU-unsplash.jpg" alt="#profile">
                </div>
                <div class="links">
                    <!-- <form action="libraly.php"></form> -->
                    <div>
                        <a href="#dashboard">
                            <h4>Dashboard</h4>
                        </a>

                    </div>
                    <div>
                        <a href="#givebook">give book</a>
                    </div>
                    <div>
                        <a href="#">collect books</a>
                    </div>
                    <div>
                        <a href="#">Register lib student</a>
                    </div>
                    <div>
                        <a href="#">
                            <h4>Libraly books</h4>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <h4>Make books order</h4>
                        </a>
                    </div>
                    <div>
                        <a href="#revisionmaterials">
                            Add revision materials
                        </a>
                    </div>

                </div>
            </div>
            <div class="main_side_container">
                <div class="lib_nav_section">
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">School Libraly</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../logout.php">logout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#music">Music</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="lib_container">
                    <h4>Register New student</h4>
                    <form action="lib_std_sgnup_db.php" class='lib_signup_form' method='post'>
                        <?php if (isset($_GET['lierror'])) { ?>
                            <p class="lierror" style="color: red"><?php echo $_GET['lierror']; ?></p>
                        <?php } ?>
                        <label>Student Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Student Name" requred>
                        <label>Year of entry</label>
                        <input type="text" name="year" class="form-control" placeholder="Year of entry" requred>
                        <label>Form</label>
                        <input type="text" name="form" class="form-control" placeholder="Form" requred>
                        <label>Addmission</label>
                        <input type="text" name="addmission" class="form-control" placeholder="Addmission Number" requred>
                        <input type="submit" name="btn_li_std_reg" class="btn btn-outline-info mt-2" value='Register' requred>
                        <?php if (isset($_GET['succ'])) { ?>
                            <p class="succ" style="color: green"><?php echo $_GET['succ']; ?></p>
                        <?php } ?>
                    </form>
                </div>



                <div>
                    <section class='form_section'>
                        <h4>Insert books</h4>
                        <form action="books_db.php" method='post'>
                            <?php if (isset($_GET['lierror'])) { ?>
                                <p class="lierror" style="color: red"><?php echo $_GET['lierror']; ?></p>
                            <?php } ?>
                            <label for="">Book Name</label>
                            <input type="text" name='book_name' placeholder='Book Name' required class='form-control'>
                            <label for="">Subject</label>
                            <input type="text" name='subject' placeholder='Subject' required class='form-control'>
                            <label for="">Author</label>
                            <input type="text" name='author' placeholder='Author' required class='form-control'>
                            <label for="">Description</label>
                            <input type="text" name='description' placeholder='Description' required class='form-control'>
                            <label for="">Location</label>
                            <input type="text" name='location' placeholder='Location' required class='form-control'>
                            <label for="">Number</label>
                            <input type="text" name='number' placeholder='Ammount of this type of book.' required class='form-control'>
                            <input type="submit" value='Add Book' name='btn_insert' class='btn btn-info addbooks_btn'>
                            <?php if (isset($_GET['wow'])) { ?>
                                <p class="succ" style="color: green"><?php echo $_GET['wow']; ?></p>
                            <?php } ?>
                        </form>
                    </section>
                </div>


                <div class='books_form' id="givebook">
                    <h1>Giving of books</h1>
                    <form action='std_bk_giving_db.php' class='form' method='post'>
                        <?php if (isset($_GET['more'])) { ?>
                            <p class="succ" style="color: green"><?php echo $_GET['more']; ?></p>
                        <?php } ?>
                        <input type='text' required placeholder='Student name' name='studentname' class='form-control'>
                        <input type='text' required placeholder='addmission N0.' name='admissionno' class='form-control'>
                        <input type='text' class='form-control' required placeholder='book Name' name='book_name'>
                        <input type="text" class="form-control" required placeholder="Book number" name="booknumber">
                        <input type='text' required name='subject' placeholder='Subject' class='form-control'>
                        <input type='text' required name='booknumber' placeholder='Book number' class='form-control'>
                        <input type='submit' value="Giveout" name='give_bk' class='btn btn-info'>
                        <?php if (isset($_GET['given'])) { ?>
                            <p class="succ" style="color: green"><?php echo $_GET['given']; ?></p>
                        <?php } ?>
                    </form>
                </div>
                <div class='books_form'>
                    <h1>Collecting of books</h1>
                    <form action='std_bk_giving_db.php' class='form' method='post'>
                        <input type='text' required placeholder='Student name' name='studentname' class='form-control'>
                        <input type='text' required placeholder='addmission N0.' name='admissionno' class='form-control'>
                        <input type='text' class='form-control' required placeholder='Book Name' name='book_name'>
                        <input type="text" class="form-control" required placeholder="Book number" name="booknumber">
                        <input type='text' required name='subject' placeholder='Subject' class='form-control'>
                        <input type='submit' value="Collect" name='collect_bk' class='btn btn-info'>
                    </form>
                </div>
                <div id="revisionmaterials">
                    <h1>Add revision materials</h1>
                    <form action="revision_mt.php" class="form" method="post">
                        <input type="text" class="form-control" placeholder="Subject" required name="subject">
                        <input type="text" class="form-control" placeholder="Description" required name="description">
                        <input type="submit">

                    </form>
                </div>
                <div>
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <label>First Name:</label><input type="text" name="firstname" id="firstname" /><br>
                        <label>Last Name:</label><input type="text" name="lastname" id="lastname" /><br>
                        <label>Email:</label><input type="text" name="email" id="email" /><br>
                        <div><label id="upload">Select file to upload:
                                <input type="file" id="upload" name="upload" /></label></div><br>
                        <input type="submit" name=submit value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>