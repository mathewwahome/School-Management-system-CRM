<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <!-- givng of books -->
    <form action="std_bk_giving.php" method="post">
        <input type="submit"class='btn btn-info mb-3' name='give_book_to_std'>
    </form>
    <!-- collection of books -->
    <form action="std_bk_giving.php" method="post">
        <input type="submit" value="collect"class='btn btn-info' name='get_book_to_std'>
    
    </form>
</body>
</html>