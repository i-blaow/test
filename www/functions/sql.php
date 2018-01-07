<?php

function sendQuery($sql)
{
    mysql_connect('localhost', 'root', '');
    mysql_selectdb('News_Site');
    $assoc = mysql_query($sql);
    if(!is_bool($assoc)) {
    while($res = mysql_fetch_assoc($assoc)) {
        $answerDB[] = $res;
    }
    return $answerDB;
    } else {
        return null;
    }
}   /**     Посылает запрос в БД и возвращает массив ответа   */