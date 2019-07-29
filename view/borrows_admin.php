<table class="table">
    <thead>
        <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Type</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">User</th>
        <th scope="col"><button class = "btn btn-success">Add</button></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sth = $db_connect->prepare("SELECT title, author, book_type, date_start, date_end, user FROM borrows");
            $sth->execute([$user]);
                            
            while($row = $sth->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>". $row['title'] ."</td>";
            echo "<td>". $row['author']. "</td>";
            echo "<td>". $row['book_type'] ."</td>";
            echo "<td>". $row['date_start'] ."</td>";
            echo "<td>". $row['date_end'] ."</td>";
            echo "<td>". $row['user'] ."</td>";
            echo "<td><button class = 'btn btn-danger'>Revoke</button></td>";
            echo "</tr>";
            }
                            
         ?>
    </tbody>
</table>