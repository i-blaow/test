<?php
require __DIR__ . '/../functions/sql.php';

function get_AllNews()
{
    $sql = 'SELECT * FROM news';
    $res = sendQuery($sql);
    foreach($res as $value) {
        $all_News[] = ['id' => $value['id'],
                        'Link' => $value['Link'],
                        'Date' => $value['Date']];
        }
    return $all_News;
}       // Возвращает массив всех записей из таблица News (доделать)
get_AllNews();