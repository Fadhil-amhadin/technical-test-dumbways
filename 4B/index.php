<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Library</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand"><h1>Book Library</h1></a>
        <form class="form-inline">
            <a href="/add_book.php" class="btn btn-outline-primary my-2 my-sm-0" >Add Book</a>
            <a href="/add_writer.php" class="btn btn-outline-primary my-2 my-sm-0" >Add Writer</a>
            <a href="/add_kategori.php" class="btn btn-outline-primary my-2 my-sm-0" >Add Category</a>
        </form>
    </nav>

    <div class="container">
        <table>
            <tr>
                <?php include 'create.php'; ?>         
            </tr>
        </table>
    </div>
    
</body>
</html>