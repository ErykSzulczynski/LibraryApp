<?php

    require_once('connect.php');

    $db_connect = @new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);

    $id = intval($_POST['id']);
    $title = $_POST['title'];
    $author = $_POST['author'];
    $type = $_POST['type'];
    $details = $_POST['details'];
    $available = intval($_POST['availability']);

    $stmt = $db_connect->prepare("UPDATE books SET title=?, author=?, book_type=?, details=?, is_available=? WHERE id = ?");
    $params = [$title, $author, $type, $details, $available, $id];
    $stmt->execute($params);
    $stmt = NULL;

    header('Location: /MagicLibrary/books_admin.php');
?>