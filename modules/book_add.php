<?php

    require_once('connect.php');

    $db_connect = @new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);    

    $title = $_POST['title'];
    $author = $_POST['author'];
    $type = $_POST['type'];
    $details = $_POST['details'];
    $available = intval($_POST['availability']);

    $stmt = $db_connect->prepare("INSERT INTO books (id, title, author, book_type, details, is_available) VALUES (NULL,'$title','$author','$type','$details','$available')");
    $stmt->execute();
    $stmt = NULL;

    header('Location: /MagicLibrary/books_admin.php');
?>