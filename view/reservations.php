<div class="card bg-light" style="min-width: 20rem;">
    <div class="card-header">Reservations</div>
    <div class="card-body">
        <p class="card-text">
            <table class = "table">
                <?php
                    $sth = $db_connect->prepare("SELECT title, date_end FROM borrows WHERE user = ?");
                    $sth->execute([$user]);

                    $book_res = $db_connect->prepare("SELECT book_id FROM reservations WHERE user = ?");
                    $book_res->execute([$user]);

                    $book_view = $db_connect->prepare("SELECT title, author FROM books WHERE id = ?");
                    
                    while($row = $book_res->fetch(PDO::FETCH_ASSOC)){
                        $book_id = $row['book_id'];
                        $book_view->execute([$book_id]);

                        while($row2 = $book_view->fetch(PDO::FETCH_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$row2['title']."</td>";
                            echo "<td>".$row2['author']."</td>";
                            echo "<td><button type='button' class='btn btn-danger'>Resign</button></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>
        </p>
    </div>
</div>