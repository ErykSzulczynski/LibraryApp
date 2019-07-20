<?php
    require_once('./view/header.php')
?>
<body>

<div class="login__box">

    <img class = "login__logo mb-4" src = "./img/book.png">

    <form action = "/MagicLibrary/modules/login_check.php" method = "POST">
    <div class="form-group">
        <input type="login" class="form-control" name = "login" placeholder="Login">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name = "password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary login__btn">Submit</button>
    </form>

</div>

<?php
    require_once('./view/scripts.php');
?>
</body>
</html>