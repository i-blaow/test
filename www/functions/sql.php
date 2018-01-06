<?php

function sendQuery($sql)
{
    mysql_connect('localhost', 'root', '');
    mysql_selectdb('News_Site');
    $assoc = mysql_query($sql);
    while($res = mysql_fetch_assoc($assoc)) {
        $answerDB[] = $res;
    }
    return $answerDB;
}   /**     Посылает запрос в БД и возвращает массив ответа   */
