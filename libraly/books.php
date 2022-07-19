<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books</title>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js.map"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/books.css">

</head>
<body>
    <header>

    </header>
    <section class='form_section'>
        <h4 style="color: blue; font-size:large;" >Insert books</h4>
        <form action="books_db.php" method='post'>
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
        </form>
    </section>
</body>
</html>