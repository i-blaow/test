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


}       // Возвращает массив юзера

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
}       // Шифрует Cookie под названием token и заносит в БД.


function add_New()
{
    if(isset($_POST['title']) && isset($_POST['text'])) {
        $Date = date("Ymd");
        $link = substr($_POST['title'], 0, 8);
        $miniText = substr($_POST['text'], 0, 250);
        $sql = "INSERT INTO news (Link, Date, title, text, TextFull)
            VALUES ('$link', '$Date', '$_POST[title]', '$miniText', '$_POST[text]')";
        sendQuery($sql);
        if (is_uploaded_file($_FILES['image']['tmp_name'])) {
            $dir = 'view/images/PhotoForPaper/' . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $dir);
            $photoName = $_FILES['image']['name'];
            $sql = "UPDATE news SET PhotoLink='$dir', PhotoName='$photoName' WHERE Link='$link'";
            sendQuery($sql);
            return 2;
        } else {
            return 1;
        }
    }
}       // Добавлять новость в БД

