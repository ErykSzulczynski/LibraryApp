<?php
    session_start();

    require_once('connect.php');
    $db_connect = @new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);

    $book_id = $_GET['book_id'];
    $res_id = $_GET['res_id'];

    $change_availability = $db_connect->prepare("UPDATE books SET is_available = 1 WHERE id = ?");
    $change_availability->execute([$book_id]);

    $reserve_close = $db_connect->prepare("DELETE FROM reservations WHERE id = ?");
    $reserve_close->execute([$res_id]);

    header('Location: ../index.php');
?>