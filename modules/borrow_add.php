<?php
    require_once('connect.php');

    $user = $_POST['users'];
    $title = $_POST['titles'];

    $db_connect = @new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);

    $sth = $db_connect->prepare("SELECT author, book_type FROM books WHERE title = ?");
    $sth->execute([$title]);
    
    while($row = $sth->fetch(PDO::FETCH_ASSOC)){
        $author = $row['author'];
        $book_type = $row['book_type'];

        
    }
    $sth = NULL;

    $borrow_add = $db_connect->prepare("INSERT INTO borrows (id,title,author,book_type,date_start,date_end,user) VALUES (NULL,'$title','$author','$book_type',curdate(),date_add(curdate(), interval 14 day),'$user')");
    $borrow_add->execute();
    $borrow_add = NULL;

    header('Location: ../admin.php');
?>