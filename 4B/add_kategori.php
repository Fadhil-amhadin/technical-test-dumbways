<?php
    include 'connect.php';
    $kategori = $_POST['kategori'];
    $sql = "INSERT INTO category_tb(name) VALUES($kategori)";
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
    <div class="form-group">
        <label >Kategori</label>
        <input type="text" class="form-control" name="kategori">
    </div>
  
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</body>
</html>