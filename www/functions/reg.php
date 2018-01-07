<?php
require_once 'sql.php';

function isUser($token = 0)
{

    switch ($token) {
        case 0:
    if (isset($_COOKIE['login'])) {
    return true;
    }
    break;
        case 1:
    if (isset($_COOKIE['login']) && isset($_COOKIE['token='])) {
        $res = get_UserInfo($_COOKIE['login']);
        $res['token'] = $_COOKIE['token='];
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
            return true;
        }
    } else {
         echo 'Такие данные уже используются!';
            return false;
    }

}

