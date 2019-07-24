<table class="table">
    <thead>
        <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Type</th>
        <th scope="col">Availability</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sth = $db_connect->prepare("SELECT id, title, author, book_type, is_available FROM books");
            $sth->execute();
                            
            while($row = $sth->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>". $row['title'] ."</td>";
            echo "<td>". $row['author']. "</td>";
            echo "<td>". $row['book_type'] ."</td>";
            if($row['is_available'] == 1){
                echo "<td><button type='button' class='btn btn-success'>Available</button></td>";
            }
            else{
                echo "<td><button type='button' class='btn btn-danger'>Not Available</button></td>";
            }
            echo '<td><button onclick="document.location=\'modules/reservation_open.php?id='.$row['id'].'\'" class="btn btn-primary">Reserve</button></td>';
            echo "</tr>";
            }
                            
         ?>
    </tbody>
</table>