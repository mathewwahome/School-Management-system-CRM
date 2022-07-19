<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giving and receiving of books</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/std_bk_giving.css">
</head>
<body>
<?php
if (isset($_POST['give_book_to_std'])){
    echo"<div class='booksgivingmainpage'>
    <center>
            <div class='books_form'>
                <h1>Giving of books</h1>
                <form action='std_bk_giving_db.php' class='form' method='post'>
                    <input type='text'required placeholder='Student name' name='studentname'class='form-control'>
                    <input type='text'required placeholder='addmission N0.' name='admissionno' class='form-control'>
                    <input type='text'class='form-control' required placeholder='book Name' name='book_name'>
                    <input type='text' required name='subject' placeholder='Subject' class='form-control'>
                    <input type='text' required name='booknumber' placeholder='Book number' class='form-control'>   
                    <input type='submit' name='give_bk' class='btn btn-info'>
                </form>
            </div>
            </center>
        </div>";
}elseif (isset($_POST['get_book_to_std'])){
    echo"<div class='booksgivingmainpage'>
    <center>
            <div class='books_form'>
                <h1>Collecting of books</h1>
                <form action ='std_bk_giving_db.php' class='form' method='post'>
                <input type='text'required placeholder='Student name' name='studentname'class='form-control'>
                <input type='text'required placeholder='addmission N0. name='admissionno' class='form-control'>
                <input type='text'class='form-control' required placeholder='book Name' name='book_name'>
                <input type='text' required name='subject' placeholder='Subject' class='form-control'> 
                <input type='submit' name='collect_bk' class='btn btn-info'>
            </form>
            </div>
            </center>
    </div>";
}
?>  
</body>
</html>
