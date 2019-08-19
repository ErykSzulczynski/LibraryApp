<?php
    require_once('connect.php');

    $db_connect = @new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);

    $id = $_GET['id'];

    $borrowDelete = $db_connect->prepare('DELETE FROM borrows WHERE id = ?');
    $borrowDelete->execute([$id]);

    header('Location: ../admin.php');
?>