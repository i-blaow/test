<?php
require __DIR__ . '/../functions/sql.php';

function get_AllNews()
{
    $sql = 'SELECT * FROM news ORDER BY Date DESC';
    return sendQuery($sql);

}       // Возвращает массив всех записей из таблица News (доделать)





function get_UserInfo($login)
{
    $sql = "SELECT * FROM users where user='$login'";
    $res = sendQuery($sql);
    if(isset($res)) {
        foreach ($res as $value) {
            $all_Info[] = [
                'user' => $value['user'],
                'token' => $value['token'],
                'password' => $value['password'],
                'id' => $value['id'],
                'email' => $value['email']
            ];
        }return $all_Info[0];
    }   else {
        echo 'Вы не зарегистрированы';
        return false;
    }


}       // Возвращает массив всех

function get_Token($id)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $cookie = '';
    $max = strlen($characters) - 1;

    for ($i = 0; $i < 56; $i++) {
        $cookie .= $characters[mt_rand(0, $max)];
    }
    $sql = "UPDATE users SET token='$cookie' WHERE id='$id'";
    sendQuery($sql);
    return $cookie;
}