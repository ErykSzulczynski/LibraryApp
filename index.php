<?php
    session_start();


    require_once('./view/header.php');
    require_once('./modules/connect.php');
    $db_connect = @new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);
    $user = $_SESSION['user'];

?>
<body>
<div class="container">
    <div class="sidebar__wrapper pt-4">
        <?php
            require_once('./view/sidebar.php');
        ?>
    </div>
    <div class="content__wrapper p-5">
        <div class="row1 m-5">
            <div class="card bg-light mb-3" style="min-width: 55rem;">
                <div class="card-header">Borrows</div>
                <div class="card-body">
                    <?php
                    require_once('./view/borrows.php');
                    ?>
                </div>
            </div>
        </div>
        <div class="row2 my-5">
        <?php
            require_once('./view/notifications.php');
            require_once('./view/reservations_view.php');
        ?>
        </div>
    </div>
</div>
</body>
</html>