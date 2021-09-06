<?php
    include 'connect.php';
    $sql = "SELECT b.id, b.name AS book_name, c.name AS category, w.name AS writer_name, b.Publication_year, b.img FROM book_tb  b JOIN category_tb c ON b.category_id = c.id JOIN writer_tb w ON b.writer_id = w.id;";
    $result = $connection->query($sql);
    while($row = $result->fetch_assoc()){
        echo'<div class="card" style="width: 30rem;">';
        echo'    <img class="card-img-top d-flex justify-content-center" src="image/'.$row['img'].'.png" alt="Card image cap">';
        echo'    <div class="card-body">';
        echo'        <h5 class="card-title">Judul: '.$row['book_name'].'</h5>';
        echo'    </div>';
        echo'    <ul class="list-group list-group-flush">';
        echo'        <li class="list-group-item">Penulis: '.$row['writer_name'].'</li>';
        echo'        <li class="list-group-item">Terbit: '.$row['Publication_year'].'</li>';
        echo'        <li class="list-group-item">Kategori: '.$row['category'].'</li>';
        echo'    </ul>';
        echo'    <div class="card-body">';
        echo'        <a href="/index.php" class="btn btn-success">Kembali</a>';
        echo'    </div>';
        echo'</div>';
    }
    $connection->close();
?>