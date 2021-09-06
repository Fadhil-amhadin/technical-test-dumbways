<?php
    include 'connect.php';
    $sql = "SELECT name, img FROM  book_tb";
    $result = $connection->query($sql);
    while($row = $result->fetch_assoc()){
        echo'<td>';
        echo'    <div class="card" style="width: 18rem;">';
        echo'        <img class="card-img-top" src="image/'.$row['img'].'.png"">';
        echo'        <div class="card-body">';
        echo'            <h5 class="card-title">'.$row['name'].'</h5>';
        echo'            <a href="/detail_page.php" class="btn btn-primary">View Detail</a>';
        echo'            <a href="#" class="btn btn-danger">Delete</a>';
        echo'        </div>';
        echo'    </div>';
        echo'</td>';
    }
    $connection->close();
?>