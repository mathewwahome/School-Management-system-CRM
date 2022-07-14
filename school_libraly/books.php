<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books</title>
</head>
<body>
    <header>

    </header>
    <section>
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
            <input type="submit" value='Add Book' class='btn btn-info addbooks_btn'>
        </form>
    </section>
</body>
</html>