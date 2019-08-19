<div id = "modal__container" style = "display: none;">
    <div id='myModal' role='dialog' class='position-absolute w-100'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h4 class='modal-title'>Edit</h4>
                </div>
                <form method = 'POST' action = './modules/borrow_add.php'>
                    <div class='modal-body'>
                        <div class='form-group'>
                            <label>Titles</label>
                            <select class='form-control' name='titles'>
                                <?php
                                    $titles = $db_connect->prepare("SELECT title FROM books");
                                    $titles->execute();
                                    
                                    while($row = $titles->fetch(PDO::FETCH_ASSOC)){
                                        echo "<option value = '". $row['title'] ."'>".$row['title']."</option>";
                                    }

                                    $titles = NULL;
                                ?>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label>Users</label>
                            <select class='form-control' name='users'>
                                <?php
                                    $titles = $db_connect->prepare("SELECT user FROM users");
                                    $titles->execute();
                                    
                                    while($row = $titles->fetch(PDO::FETCH_ASSOC)){
                                        echo "<option value = '". $row['user'] ."'>".$row['user']."</option>";
                                    }

                                    $titles = NULL;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class='modal-footer'>
                        <button type='submit' class='btn btn-success'>Submit</button>
                        <button type='button' class='btn btn-danger' onclick=HideBorrowAddModal()>Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id='modal__container--revoke' style = 'display: none;'>
    <div id='myModal' role='dialog' class='position-absolute w-100'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h4 class='modal-title'>Revoke</h4>
                </div>
                    <div class='modal-body'>
                        <span>Are you sure, that you want to revoke this borrow?</span>
                    </div>
                    <div class='modal-footer'>
                        <div id="button__container"></div>
                        <button type='button' class='btn btn-danger' onclick = HideRevokeModal()>Close</button>
                    </div>
            </div>
        </div>
    </div>   
</div>  
<table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Type</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">User</th>
        <th scope="col"><button class = "btn btn-success" onclick = ViewBorrowAddModal()>Add</button></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sth = $db_connect->prepare("SELECT id, title, author, book_type, date_start, date_end, user FROM borrows");
            $sth->execute([$user]);
                            
            while($row = $sth->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>". $row['id'] ."</td>";
            echo "<td>". $row['title'] ."</td>";
            echo "<td>". $row['author']. "</td>";
            echo "<td>". $row['book_type'] ."</td>";
            echo "<td>". $row['date_start'] ."</td>";
            echo "<td>". $row['date_end'] ."</td>";
            echo "<td>". $row['user'] ."</td>";
            echo "<td><button class = 'btn btn-danger' onclick='RevokeModal(".$row['id'].")'>Revoke</button></td>";
            echo "</tr>";
            }
            
            $sth = NULL;
         ?>
    </tbody>
</table>