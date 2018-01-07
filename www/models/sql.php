<?php
require __DIR__ . '/../functions/sql.php';

function get_AllNews()
{
    $sql = 'SELECT * FROM news ORDER BY Date DESC';
    $res = sendQuery($sql);
    foreach($res as $value) {
        $all_News[] = [
                        'id' => $value['id'],
                        'Link' => $value['Link'],
                        'Date' => $value['Date'],
                        'title' => $value['title'],
                        'text'  => $value['text'],
                        ];
        }
    return $all_News;
}       // Возвращает массив всех записей из таблица News (доделать)


function get_UserInfo($login)
{
    $sql = 'SELECT * FROM news where user="$login"';
    $res = sendQuery($sql);
    $all_Info[]=0;
    if(isset($res)) {
        foreach ($res as $value) {
            $all_Info[] = [
                'user' => $value['user'],
                'token' => $value['token'],
                'password' => $value['password'],
                'id' => $value['id'],
                'email' => $value['email']
            ];
        }
    }
    return $all_Info;
}       // Возвращает массив всех

function get_Token()
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $cookie = '';
    $max = strlen($characters) - 1;

    for ($i = 0; $i < 56; $i++) {
        $cookie .= $characters[mt_rand(0, $max)];
    }
    return $cookie;
}