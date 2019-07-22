<table class="table">
    <thead>
        <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Type</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sth = $db_connect->prepare("SELECT title, author, book_type, date_start, date_end FROM borrows WHERE user = ?");
            $sth->execute([$user]);
                            
            while($row = $sth->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<th scope='row'>". $row['title'] ."</th>";
            echo "<td>". $row['author']. "</td>";
            echo "<td>". $row['book_type'] ."</td>";
            echo "<td>". $row['date_start'] ."</td>";
            echo "<td>". $row['date_end'] ."</td>";
            echo "</tr>";
            }
                            
         ?>
    </tbody>
</table>