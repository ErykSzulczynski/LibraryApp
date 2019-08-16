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
            require_once('./view/sidebar_admin.php');
        ?>
    </div>
    <div class="content__wrapper p-5">
        <div class="row1 m-5">
            <div class="card bg-light mb-3" style="min-width: 75rem;">
                <div class="card-header">Borrows</div>
                <div class="card-body">
                    <?php
                    require_once('./view/borrows_admin.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src='js/script.js'></script>
</html>