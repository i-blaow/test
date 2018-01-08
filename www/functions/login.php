<?php
require_once 'sql.php';
function sign_in()
{
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $md5psw = md5($_POST['password']);
        $res = get_UserInfo($login);
        if($res['user'] == $login && $res['password'] == $md5psw) {
            $cookie = get_Token($res['id']);
            switch($_POST['Remember_me'])
            {
                case 0:
                    setcookie('login', $login, null);
                    setcookie('token', $cookie, null);
                    header('Location: http://test1.local/index.php');
                    break;
                case 1:
                    setcookie('login', $login, time()+ 86400*365);
                    setcookie('token', $cookie, time()+ 86400*365);
                    header('Location: http://test1.local/index.php');
                    break;
                default:
                    return false;
            }
            return true;
        }
    }
}       // Функция Входа на сайт

