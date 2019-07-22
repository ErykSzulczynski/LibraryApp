<?php
    session_start();

    if (!isset($_POST['login']) || !isset($_POST['password'])){
        header('Location: /MagicLibrary/login.php');
        exit();
    }

    require_once "connect.php";

        $db_connect = @new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);
       
        if($db_connect->errorCode()!=0){
            echo "Connection failed";
        }
        else{
            $login = $_POST['login'];
            $password = $_POST['password'];
            $login_secure = htmlentities($login, ENT_QUOTES, "UTF-8");

            $result = $db_connect->prepare("SELECT * FROM users WHERE user = ?");
            $result->execute([$login_secure]);
            $result_user = $result->fetch();

            if($result_user){

                    $users_num = $result->fetchColumn();

                    if(password_verify($password, $result_user['pass']) == true){

                        if($db_connect->query('SELECT user_type FROM users') == "admin"){
                            header('Location: admin.php');
                        }

                        else{
                            header('Location: /MagicLibrary/index.php');
                            $_SESSION['user'] = $login;
                        }

                        }

                    else{
                            echo("Login lub hasło jest niepoprawne");
                    }
                }
                else{
                    echo("Login lub hasło jest niepoprawne");
                }
        }

?>