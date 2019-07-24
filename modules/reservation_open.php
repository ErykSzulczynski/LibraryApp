<?php
    session_start();

    require_once('connect.php');
    $db_connect = @new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);

    $user = $_SESSION['user'];

    $id = $_GET['id'];

    $change_availability = $db_connect->prepare("UPDATE books SET is_available = 0 WHERE id = ?");
    $change_availability->execute([$id]);

    $reserve_book = $db_connect->prepare("INSERT INTO reservations (id, book_id, user) VALUES (NULL, '$id', '$user')");
    $reserve_book->execute();

    header('Location: ../books.php');
?>