<?php
require_once 'sql.php';

function isUser()
{
    if (isset($_COOKIE['login']) && isset($_COOKIE['token'])) {
        $res = get_UserInfo($_COOKIE['login']);
        if ($res['user'] == $_COOKIE['login'] && $res['token'] == $_COOKIE['token']) {
            setcookie('login', $_COOKIE['login'], time()+86400);
            setcookie('token', $_COOKIE['token'], time()+86400);
            return true;
        } else {
            return false;
        }
    }

}   // Проверяет зарегистрирован ли пользователь.
function registration()     // Должна записывать в базу users данные о пользователе
{
    if(isset($_POST['password']) && strlen($_POST['password']) < 4) {
        echo 'Пароль должен быть больше 4 символов.';
        return false;
    }
    $email = $_POST['email'];
    $login = $_POST['login'];
    $sql = "SELECT email, user FROM users WHERE email='$email' OR user='$login'";
    $answer = sendQuery($sql);
    if(null == $answer) {
        if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])) {
            $md5psw = md5($_POST['password']);
            $sql = "INSERT INTO users (user, password, email) VALUES ('$_POST[login]', '$md5psw', '$_POST[email]')";
            sendQuery($sql);
            $_SESSION['notifications'] = 'Регистрация прошла успешно';
            return true;
        }
    } else {
            return false;
    }

}

