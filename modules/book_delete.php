<?php

    require_once('connect.php');

    $db_connect = @new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);
    
    $id = intval($_GET['id']);
    $stmt = $db_connect->prepare("DELETE FROM books WHERE id = ?");
    $params = [$id];
    $stmt->execute($params);
    $stmt = NULL;

    header('Location: /MagicLibrary/books_admin.php');
?>