<?php
require_once 'sql.php';
function sign_in()
{
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $md5psw = md5($_POST['password']);
        $cookie = get_Token();
        $res = get_UserInfo($login);
        if($res['login'] == $login && $res['password'] == $md5psw) {
            switch($_POST['Remember_me'])
            {
                case 0:
                    setcookie('login', $_POST['login'], '');
                    setcookie('token=', $cookie, '');
                    header('Location: http://test1.local/index.php');
                    break;
                case 1:
                    setcookie('login', $_POST['login'], time()+ 86400*365);
                    setcookie('token=', $cookie, time()+ 86400*365);
                    $sql = "UPDATE users SET token='$cookie' WHERE '$login'";
                    sendQuery($sql);
                    header('Location: http://test1.local/index.php');
                    break;
                default:
                    return false;
            }
            return true;
        }
    }
}       // Функция