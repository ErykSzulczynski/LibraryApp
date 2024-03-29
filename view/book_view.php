<table class="table w-auto">
    <thead>
        <tr>
        <th scope="col" class = 'px-4'>Title</th>
        <th scope="col" class = 'px-4'>Author</th>
        <th scope="col" class = 'px-4'>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sth = $db_connect->prepare("SELECT id, title, author, book_type, is_available FROM books");
            $sth->execute();
                            
            while($row = $sth->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td class = 'px-4'>". $row['title'] ."</td>";
            echo "<td class = 'px-4'>". $row['author']. "</td>";
            echo "<td class = 'px-4'>". $row['book_type'] ."</td>";
            if($row['is_available'] == 1){
                echo "<td><button type='button' class='btn btn-success mr-5'>Available</button>";
            }
            else{
                echo "<td><button type='button' class='btn btn-danger mr-5'>Not Available</button>";
            }
            echo '<button onclick="document.location=\'modules/reservation_open.php?id='.$row['id'].'\'" class="btn btn-primary mr-5">Reserve</button>';
            echo '<button type="button" class="btn btn-info">Details</button></td>';
            echo "</tr>";
            }
         ?>
    </tbody>
</table>