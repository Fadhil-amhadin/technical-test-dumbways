<?php
    include 'connect.php';
    $judul = $_POST['judul'];
    $terbit = $_POST['terbit'];
    $sql = "INSERT INTO book_tb(name, terbit) VALUES($judul, $terbit)";
    $result = $connection->query($sql);
    $connection->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD Book</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <form method="POST">
    <div class="form-group">
        <label >Judul Buku</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
        <label >Tahun Terbit</label>
        <input type="text" class="form-control" name="terbit">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</body>
</html>