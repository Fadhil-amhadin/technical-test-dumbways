<?php
    include 'connect.php';
    $penulis = $_POST['penulis'];
    $sql = "INSERT INTO writer_tb(name) VALUES($penulis)";
    $result = $connection->query($sql);
    $connection->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD writer</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="form-group">
        <label >Penulis</label>
        <input type="text" class="form-control" name="penulis">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</body>
</html>