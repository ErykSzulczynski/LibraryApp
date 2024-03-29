<table class="table w-auto">
    <thead>
        <tr>
        <th scope="col" class = 'px-4'>Title</th>
        <th scope="col" class = 'px-4'>Author</th>
        <th scope="col" class = 'px-4'>Type</th>
        <?php
            $sth = $db_connect->prepare("SELECT id, title, author, book_type, details, is_available FROM books");
            $sth->execute();
            echo "<th scope='col'><button class = 'btn btn-success' onclick='ViewAddModal()'>Add</button></th>";
        ?>
        </tr>
    </thead>
    <tbody>
        <?php                            
            while($row = $sth->fetch(PDO::FETCH_ASSOC)){
                $id = $row['id'];
                $title = $row['title'];
                $author = $row['author'];
                $details = $row['details'];
                $type = $row['book_type'];
                $availability = $row['is_available'];
                echo "<tr>";
                echo "<td id = 'row__id' value = '$id' class = 'px-4'>$id</td>";
                echo "<td class = 'px-4'>$title</td>";
                echo "<td class = 'px-4'>$author</td>";
                echo "<td class = 'px-4'>$type</td>";
                if($row['is_available'] == 1){
                    echo "<td><button type='button' class='btn btn-success mr-5'>Available</button>";
                }
                else{
                    echo "<td><button type='button' class='btn btn-danger mr-5'>Not Available</button>";
                }                
                echo "<button type='button' class='btn btn-info mr-5' onclick='ViewDetailModal(\"$title\",\"$author\",\"$type\",\"$details\")'>Details</button>";
                echo "<button type='button' class='btn btn-dark mr-5' onclick='ViewEditModal($id, \"$title\",\"$author\",\"$details\",\"$type\", $availability)'>Edit</button>";
                echo "<button type='button' class='btn btn-danger' onclick='ViewDeleteModal($id)'>Delete</button></td>";
                echo "</tr>";
            }
         ?>
    </tbody>
</table>